function CGame(oData){
    
    var _bInitGame;
    
    var _iScore;
    var _iTimeIdle;
    var _iTimeWin;
    var _iCurAnim;
    var _iGameState;
    var _iMultiply;
    var _iCurBet;
    var _iCurCredit;
    var _iCurWin;

    var _aProbability;

    var _oInterface;
    var _oEndPanel = null;
    var _oParent;
    var _oWheel;
    var _oLeds;
    
    this._init = function(){
        _bInitGame=true;
        
        _iMultiply = 1;
        _iTimeIdle = 0;
        _iTimeWin = 0;
        _iCurBet = START_BET;
        _iCurCredit = START_CREDIT;
        _iCurWin = -1;        
        _iGameState = STATE_IDLE;

        _aProbability = new Array();

        var pCenterWheel = {x: 1198, y: 540};

        _oWheel = new CWheel(pCenterWheel.x, pCenterWheel.y);
        
        var oBg = createBitmap(s_oSpriteLibrary.getSprite('bg_game'));
        s_oStage.addChild(oBg);

        _oLeds = new CLeds(pCenterWheel.x, pCenterWheel.y);
        _iCurAnim = _oLeds.getState();

        _oInterface = new CInterface(); 
        
        new CHelpPanel();
        
        this._initProbability();
    };
    
    this._initProbability = function(){
       
        var aPrizeLength = new Array();

        for(var i=0; i<PRIZE_PROBABILITY.length; i++){
            aPrizeLength[i] = PRIZE_PROBABILITY[i];
        }
       
        for(var i=0; i<aPrizeLength.length; i++){
            for(var j=0; j<aPrizeLength[i]; j++){
                _aProbability.push(i);
            }
            
        }            
        
    };
    
    this.modifyBonus = function(szType){
        if(szType === "plus"){
            _iCurBet += BET_OFFSET;
        } else {
            _iCurBet -= BET_OFFSET;
        }

        if(_iCurBet > MAX_BET){
			_iCurBet -= BET_OFFSET;
            _iMultiply = 1;
        } else if(_iCurBet < START_BET) {
			_iCurBet += BET_OFFSET;
            _iMultiply = 1;
        } else if(_iCurBet > _iCurCredit ){
			_iCurBet -= BET_OFFSET;
            return;
        }
		
		_iMultiply = Math.floor(_iCurBet/START_BET);
		
        _oInterface.refreshBet(_iCurBet);
        _oWheel.clearText(_iMultiply);
        _oWheel.setText(_iMultiply);
        
        
    };
    
    this.spinWheel = function(){
        _oInterface.disableSpin(true);
        _iGameState = STATE_SPIN;
        _iTimeWin = 0;
        
        this.setNewRound();
        
		_oInterface.refreshMoney("0");
        _oInterface.refreshCredit(_iCurCredit);
        
        //SELECT PRIZE        
        var iPrizeToChoose = Math.floor(Math.random()*_aProbability.length);        
        _iCurWin = _aProbability[iPrizeToChoose];
                
        //CALCULATE ROTATION
        var iNumSpinFake = MIN_FAKE_SPIN + Math.floor(Math.random()*3);
        var iOffsetInterval = SEGMENT_ROT - 3;
        var iOffsetSpin = -iOffsetInterval/2 + Math.random()*iOffsetInterval;//Math.round(Math.random()*iOffsetInterval);
        var _iCurWheelDegree = _oWheel.getDegree();
        
        var iTrueRotation = (360 - _iCurWheelDegree + _aProbability[iPrizeToChoose] * SEGMENT_ROT + iOffsetSpin)%360; //Define how much rotation, to reach the selected prize.       
        
        var iRotValue = 360*iNumSpinFake + iTrueRotation;
        var iTimeMult = iNumSpinFake;

        //SPIN
        _oWheel.spin(iRotValue, iTimeMult);
    };                 
    
    this.setNewRound = function(){
        if(_iCurWin < 0){
            return;
        }
        
        _oInterface.refreshCredit(_iCurCredit);
        _oInterface.clearMoneyPanel();
        
        _iCurWin = -1;
    };
    
    this.releaseWheel = function(){
        _oInterface.disableSpin(false); 
        _oInterface.refreshMoney(PRIZE[_iCurWin]);
		
        _iCurCredit += PRIZE[_iCurWin];
        _oInterface.refreshCredit(_iCurCredit);
		
		_oInterface.animWin();
		
        if(_iCurCredit < START_BET){
            
        }        
        if(_iMultiply > _iCurCredit/START_BET ){
            _iMultiply = Math.floor(_iCurCredit/START_BET);
            _iCurBet = 100;
            _oInterface.refreshBet(_iCurBet);            
        }
        
        if(PRIZE[_iCurWin] <= 0){
            _iGameState = STATE_LOSE;
            if(DISABLE_SOUND_MOBILE === false || s_bMobile === false){
                createjs.Sound.play("game_over");
            }
        } else {
            _iGameState = STATE_WIN;
            if(DISABLE_SOUND_MOBILE === false || s_bMobile === false){
                createjs.Sound.play("win");
            }
        }
        
		$(s_oMain).trigger("save_score",[_iCurCredit,PRIZE[_iCurWin]]);
    };
    
    this.getCurColor = function(){
        return _oWheel.getColor();
    };
    
    this.unload = function(){
		if(DISABLE_SOUND_MOBILE === false || s_bMobile === false){
			createjs.Sound.stop();
		}
        _bInitGame = false;
        
        _oInterface.unload();
        if(_oEndPanel !== null){
            _oEndPanel.unload();
        }
        
        createjs.Tween.removeAllTweens();
        s_oStage.removeAllChildren();

           
    };
 
    this.onExit = function(){
        this.unload();
        s_oMain.gotoMenu();
        
        $(s_oMain).trigger("restart");
    };
    
    this._onExitHelp = function () {
         _bStartGame = true;
    };
    
    this.gameOver = function(){  
        
        _oEndPanel = CEndPanel(s_oSpriteLibrary.getSprite('msg_box'));
        _oEndPanel.show();
    };

    this._animLedIdle = function(){
        _iTimeIdle += s_iTimeElaps;
        
        if(_iTimeIdle > TIME_ANIM_IDLE){
            _iTimeIdle=0;
            var iRandAnim = Math.floor(Math.random()*_oLeds.getNumAnim());
    
            while(iRandAnim === _iCurAnim){
                iRandAnim = Math.floor(Math.random()*_oLeds.getNumAnim());
            }    
            _oLeds.changeAnim(iRandAnim);
            _iCurAnim = iRandAnim;
        }
    };    
    
    this._animLedSpin = function(){
        _oLeds.changeAnim(LED_SPIN);
        _iGameState =-1;
    };
    
    this._animLedWin = function(){
       
        if(_iTimeWin === 0){
            var iRandomWinAnim = 4 + Math.round(Math.random())
            _oLeds.changeAnim(iRandomWinAnim);
            _oLeds.setWinColor(this.getCurColor());            
        } else if(_iTimeWin > TIME_ANIM_WIN) {
            _iTimeIdle = TIME_ANIM_IDLE; 
            _iGameState = STATE_IDLE;
            this.setNewRound();
            _iTimeWin =0;
        }
        _iTimeWin += s_iTimeElaps;
        
    };
    
    this._animLedLose = function(){
       
        if(_iTimeWin === 0){            
            _oLeds.changeAnim(6);
            _oLeds.setWinColor(this.getCurColor());            
        } else if(_iTimeWin > TIME_ANIM_LOSE) {
            _iTimeIdle = TIME_ANIM_IDLE; 
            _iGameState = STATE_IDLE;
            this.setNewRound();
            _iTimeWin =0;
        }
        _iTimeWin += s_iTimeElaps;
        
    };
    
    this.update = function(){
	
        _oLeds.update();
        
        switch(_iGameState) {
            case STATE_IDLE:{
                    this._animLedIdle();
               break;
            } case STATE_SPIN: {
                    this._animLedSpin();
               break;              
               
            } case STATE_WIN: {
                    this._animLedWin();
               break;                             
            } case STATE_LOSE: {
                    this._animLedLose();
               break;                             
            }    

        }
    };

    s_oGame=this;
    
    PRIZE = oData.prize;
    PRIZE_PROBABILITY = oData.prize_probability;
    
    START_CREDIT = oData.start_credit;
    START_BET = oData.start_bet;
    BET_OFFSET = oData.bet_offset;
	MAX_BET = oData.max_bet;
    
    TIME_ANIM_IDLE = oData.anim_idle_change_frequency;
    ANIM_IDLE1_TIMESPEED = oData.led_anim_idle1_timespeed;
    ANIM_IDLE2_TIMESPEED = oData.led_anim_idle2_timespeed;
    ANIM_IDLE3_TIMESPEED = oData.led_anim_idle3_timespeed;
    
    ANIM_SPIN_TIMESPEED = oData.led_anim_spin_timespeed;
    
    TIME_ANIM_WIN = oData.led_anim_win_duration;
    ANIM_WIN1_TIMESPEED = oData.led_anim_win1_timespeed;
    ANIM_WIN2_TIMESPEED = oData.led_anim_win2_timespeed;
    
    TIME_ANIM_LOSE = oData.led_anim_lose_duration;
    
    _oParent=this;
    this._init();
}

var s_oGame;
