var _0x16c8 = ["formula", "getItem", "parse", "round", "winrate", "%", "color", "style", "getElementById", "#26e452", "innerHTML", "", "สับไพ่", "#c90000", "length", "data", "substring", "charAt", "split", "w", "r", "b", "p", "database/getresult-sexy.php", "GET", "push", "each", "ajax", "ready"];
$(document)[_0x16c8[28]](function () {
    var _0xebc4x1 = JSON[_0x16c8[2]]('[{"data":"tppp"},{"data":"bpbp"},{"data":"tpbb"},{"data":"pbbp"},{"data":"bbpb"},{"data":"bptp"},{"data":"pbpb"},{"data":"tbpb"},{"data":"pppb"},{"data":"bbtb"},{"data":"pbtp"},{"data":"bbbb"},{"data":"pptp"}]');

    function _0xebc4x2(_0xebc4x3) {
        if (predict == _0xebc4x3) {
            win++;
            rate = Math[_0x16c8[3]]((win / active) * 100);
            _0xebc4x4 = _0x16c8[4] + room;
            winhtml = rate + _0x16c8[5];
            document[_0x16c8[8]](_0xebc4x4)[_0x16c8[7]][_0x16c8[6]] = _0x16c8[9];
            document[_0x16c8[8]](_0xebc4x4)[_0x16c8[10]] = winhtml;
            stack = 1
        } else {
            if (predict != _0x16c8[11]) {
                let _0xebc4x4 = _0x16c8[4] + room;
                if (active > 0) {
                    if (stack < 4) {
                        active--;
                        stack++
                    } else {
                        rate = Math[_0x16c8[3]]((win / active) * 100);
                        winhtml = rate + _0x16c8[5];
                        document[_0x16c8[8]](_0xebc4x4)[_0x16c8[7]][_0x16c8[6]] = _0x16c8[9];
                        document[_0x16c8[8]](_0xebc4x4)[_0x16c8[10]] = winhtml;
                        stack = 1
                    }
                } else {
                    winhtml = _0x16c8[12];
                    document[_0x16c8[8]](_0xebc4x4)[_0x16c8[7]][_0x16c8[6]] = _0x16c8[13];
                    document[_0x16c8[8]](_0xebc4x4)[_0x16c8[10]] = winhtml
                }
            }
        };
        if (slot[_0x16c8[14]] == _0xebc4x1[0][_0x16c8[15]][_0x16c8[14]] - 1) {
            slot = slot[_0x16c8[16]](1, _0xebc4x1[0][_0x16c8[15]][_0x16c8[14]] - 1)
        };
        slot += _0xebc4x3;
        for (let _0xebc4x5 = 0; _0xebc4x5 < _0xebc4x1[_0x16c8[14]]; _0xebc4x5++) {
            if (slot == _0xebc4x1[_0xebc4x5][_0x16c8[15]][_0x16c8[16]](0, _0xebc4x1[_0xebc4x5][_0x16c8[15]][_0x16c8[14]] - 1)) {
                active++;
                predict = _0xebc4x1[_0xebc4x5][_0x16c8[15]][_0x16c8[17]](_0xebc4x1[_0xebc4x5][_0x16c8[15]][_0x16c8[14]] - 1);
                break
            };
            predict = _0x16c8[11]
        }
    }

    function _0xebc4x6(_0xebc4x7) {
        for (room = 0; room < 16; room++) {
            res = _0xebc4x7[room][_0x16c8[18]](_0x16c8[11]);
            if (res[0] != _0x16c8[19]) {
                active = 0;
                win = 0;
                slot = _0x16c8[11];
                stack = 1;
                predict = _0x16c8[11];
                for (let _0xebc4x5 = 0; _0xebc4x5 < 72; _0xebc4x5++) {
                    if (res[_0xebc4x5] == _0x16c8[20]) {
                        _0xebc4x2(_0x16c8[21])
                    } else {
                        if (res[_0xebc4x5] == _0x16c8[21]) {
                            _0xebc4x2(_0x16c8[22])
                        }
                    }
                }
            } else {
                let _0xebc4x4 = _0x16c8[4] + room;
                let _0xebc4x8 = _0x16c8[12];
                document[_0x16c8[8]](_0xebc4x4)[_0x16c8[7]][_0x16c8[6]] = _0x16c8[13];
                document[_0x16c8[8]](_0xebc4x4)[_0x16c8[10]] = _0xebc4x8
            }
        }
    }

    function _0xebc4x9() {
        $[_0x16c8[27]]({
            url: _0x16c8[23],
            type: _0x16c8[24],
            success: function (_0xebc4xa) {
                var _0xebc4xb = JSON[_0x16c8[2]](_0xebc4xa);
                var _0xebc4xc = [];
                $[_0x16c8[26]](_0xebc4xb, function (_0xebc4xd, _0xebc4xe) {
                    _0xebc4xc[_0x16c8[25]](_0xebc4xe.Data)
                });
                _0xebc4x6(_0xebc4xc)
            }
        })
    }
    _0xebc4x9();
    setInterval(_0xebc4x9, 5000)
})