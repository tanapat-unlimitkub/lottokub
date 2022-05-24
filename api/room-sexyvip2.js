$(document).ready(function () {
    var _0x5d80x1 = new URL(window.location.href);
    var _0x5d80x2 = _0x5d80x1.search;
    var _0x5d80x3 = new URLSearchParams(_0x5d80x2);
    var _0x5d80x4 = _0x5d80x3.get("id");
    _0x5d80x4 = parseInt(_0x5d80x4);
    var _0x5d80x5 = "";
    var _0x5d80x6 = 0;
    var _0x5d80x7 = "" + _0x5d80x4;
    var _0x5d80x8 = "000";
    var _0x5d80x9 = _0x5d80x8.substring(0, _0x5d80x8.length - _0x5d80x7.length) + _0x5d80x7;
    document.title = "BACCARAT - " + _0x5d80x9;
    var _0x5d80xa = JSON.parse('[{"data":"tpbp"},{"data":"bpbb"},{"data":"tppb"},{"data":"pbpb"},{"data":"tpbb"},{"data":"pbtb"},{"data":"pbpb"},{"data":"bbbp"},{"data":"pbbp"},{"data":"pptb"},{"data":"bptp"},{"data":"ppbb"},{"data":"bbtp"}]');
    var _0x5d80xb = true;
    ghtml = "";
    for (var _0x5d80xc = 0; _0x5d80xc < 38; _0x5d80xc++) {
        ghtml += "<tr>";
        for (var _0x5d80xd = 0; _0x5d80xd < 60; _0x5d80xd++) {
            if (_0x5d80xc == 26) {
                ghtml += '<td style="border: 1px solid rgba\(255,255,255,0.2\);background-color: #ff0033;width: 7px;height: 1px;"></td>'
            } else {
                ghtml += '<td style="border: 1px solid rgba\(255,255,255,0.2\);width: 7px;height: 7px;"></td>'
            }
        };
        ghtml += "</tr>"
    };
    document.getElementById("graph_tbl").innerHTML = ghtml;
    var _0x5d80xe = document.getElementById("graph_tbl").rows.length;

    function _0x5d80xf(_0x5d80x10) {
        let _0x5d80x11 = document.getElementById("tbl_stack");
        let _0x5d80x12 = _0x5d80x11.rows.length;
        let _0x5d80x13 = _0x5d80x11.insertRow(_0x5d80x12);
        let _0x5d80x14 = _0x5d80x13.insertCell(0);
        let _0x5d80x15 = _0x5d80x13.insertCell(1);
        let _0x5d80x16 = _0x5d80x13.insertCell(2);
        _0x5d80x14.innerHTML = _0x5d80x12 + 1;
        if (_0x5d80x10) {
            _0x5d80x16.innerHTML = "ชนะ";
            _0x5d80x15.innerHTML = stack;
            _0x5d80x16.style.backgroundColor = "#28a745"
        } else {
            _0x5d80x16.innerHTML = "แพ้";
            _0x5d80x15.innerHTML = "-";
            _0x5d80x16.style.backgroundColor = "#dc3545"
        };
        let _0x5d80x17 = document.getElementById("tbl_stack");
        _0x5d80x17.scrollTop = _0x5d80x17.scrollHeight;
        document.getElementById("total").innerHTML = _0x5d80x12 + 1;
        document.getElementById("win").innerHTML = win;
        document.getElementById("lose").innerHTML = active - win
    }

    function _0x5d80x18(_0x5d80x19) {
        if (predict == _0x5d80x19) {
            win++;
            axisY--;
            if (axisY == g_line) {
                axisY--
            };
            document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ccff00";
            rate = Math.round((win / active) * 100);
            document.getElementById("winrate").innerHTML = rate + "%";
            document.getElementById("prestat").innerHTML = "สถิติการถูกที่ผ่านมา" + rate + "%";
            document.getElementById("nextPre").innerHTML = "ตาถัดไป";
            axisX++;
            _0x5d80xf(true);
            stack = 1
        } else {
            if (predict != "") {
                axisY++;
                if (axisY > (g_line + 10)) {
                    axisY = g_line + 10
                };
                if (axisY == g_line) {
                    axisY++
                };
                document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ff00cc";
                if (active > 0) {
                    if (stack < 4) {
                        active--;
                        stack++;
                        document.getElementById("nextPre").innerHTML = "ตาถัดไป \(ไม้ที่ " + stack + "/4\)"
                    } else {
                        rate = Math.round((win / active) * 100);
                        document.getElementById("winrate").innerHTML = rate + "%";
                        document.getElementById("prestat").innerHTML = "สถิติการถูกที่ผ่านมา" + rate + "%";
                        _0x5d80xf(false);
                        stack = 1;
                        document.getElementById("nextPre").innerHTML = "ตาถัดไป"
                    }
                };
                axisX++
            }
        };
        if (slot.length == _0x5d80xa[0].data.length - 1) {
            slot = slot.substring(1, _0x5d80xa[0].data.length - 1)
        };
        slot += _0x5d80x19;
        for (let _0x5d80xc = 0; _0x5d80xc < _0x5d80xa.length; _0x5d80xc++) {
            if (slot == _0x5d80xa[_0x5d80xc].data.substring(0, _0x5d80xa[_0x5d80xc].data.length - 1)) {
                document.getElementById("nextPre").innerHTML = "ตาถัดไป \(ไม้ที่ " + stack + "/4\)";
                active++;
                predict = _0x5d80xa[_0x5d80xc].data.charAt(_0x5d80xa[_0x5d80xc].data.length - 1);
                return true
            };
            predict = ""
        };
        return false
    }
	
		var xmlHttp;
function showUser(str)
{ 
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return;
    }
    var url="update.php";
    url=url+"?sid="+Math.random();
    xmlHttp.onreadystatechange=stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}

function stateChanged() 
{ 
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    { 
        document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
    } 
}

function GetXmlHttpObject()
{
    var xmlHttp=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
    }
    catch (e)
    {
        //Internet Explorer
        try
        {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

    function _0x5d80x1a(_0x5d80x1b) {
        $.ajax({
            url: "update.php"
        }).done(function (_0x5d80x1c) {
            console.log(_0x5d80x1c);
            if (_0x5d80x1c == "Out") {
                window.location.href = "sexy-new.php"
            } else {
                let _0x5d80x1d = "img/chips-" + _0x5d80x1b + ".png";
                Swal.fire({
                    imageUrl: _0x5d80x1d,
                    animation: false,
                    width: 200,
                    background: "rgba\(0,0,0,0\)",
                    showConfirmButton: false,
                    timer: 2000,
                    customClass: {
                        popup: "animated flip"
                    }
                });
                let _0x5d80x1e = $.number(_0x5d80x1c);
                $("#navCredit").html('<img src="resource/images/new/credit.png" style="height:100%;"> &nbsp;' + _0x5d80x1e + " &nbsp;");
                $("#showCreditM").html("Credit : " + _0x5d80x1e)
            }
        })
    }

    function _0x5d80x1f(_0x5d80x20) {
        if (_0x5d80x5 != _0x5d80x20) {
            res = _0x5d80x20.split("");
            if (res[0] == "w" && _0x5d80x6 != 0) {
                window.location.reload()
            };
            _0x5d80x5 = _0x5d80x20;
            banker = 0;
            player = 0;
            equal = 0;
            active = 0;
            win = 0;
            stack = 1;
            slot = "";
            row = 0;
            col = -1;
            _0x5d80x6 = 0;
            predict = "";
            waittime = 30;
            g_line = 26;
            axisY = g_line;
            axisX = 1;
            document.getElementById("tbl_stack").innerHTML = "";
            if (!_0x5d80xb) {
                counter = setInterval(_0x5d80x21, 1000);

                function _0x5d80x21() {
                    waittime = waittime - 1;
                    if (waittime < 0) {
                        clearInterval(counter);
                        document.getElementById("countdown2").style.color = "white";
                        document.getElementById("countdown2").innerHTML = "รอสักครู่..";
                        return
                    };
                    document.getElementById("countdown2").style.color = "Orange";
                    document.getElementById("countdown2").innerHTML = "รอเวลา " + waittime + " วินาที"
                }
            };
            for (let _0x5d80xc = 0; _0x5d80xc < 72; _0x5d80xc++) {
                if ((_0x5d80xc % 6) == 0) {
                    col++
                };
                if (res[_0x5d80xc] == "r") {
                    html = '<img src="./img/chips-b.png" style="height: 24px;width: 24px;">';
                    banker++;
                    _0x5d80x6++;
                    _0x5d80x18("b")
                } else {
                    if (res[_0x5d80xc] == "b") {
                        html = '<img src="img/chips-p.png" style="height: 24px;width: 24px;">';
                        player++;
                        _0x5d80x6++;
                        _0x5d80x18("p")
                    } else {
                        if (res[_0x5d80xc] == "g") {
                            html = '<img src="img/chips-t.png" style="height: 24px;width: 24px;">';
                            equal++;
                            _0x5d80x6++;
                            if (predict != "") {
                                document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ff3300";
                                axisX++
                            }
                        } else {
                            html = '<img src="" style="height: 24px;width: 24px;">'
                        }
                    }
                };
                document.getElementById("rtable").rows[_0x5d80xc % 6].cells[col].innerHTML = html
            };
            switch (predict) {
            case "b":
                html = '<img src="img/chips-b.png" style="height: 50px;width: 50px;">';
                _0x5d80x1a("b");
                break;
            case "p":
                html = '<img src="img/chips-p.png" style="height: 50px;width: 50px;">';
                _0x5d80x1a("p");
                break;
            case "t":
                html = '<img src="img/chips-t.png" style="height: 50px;width: 50px;">';
                _0x5d80x1a("t");
                break;
            default:
                html = "รอสูตร"
            };
            document.getElementById("predict").innerHTML = html;
            if (_0x5d80x6 > 0) {
                document.getElementById("bstr").innerHTML = "แบงค์เกอร์ชนะ&nbsp;&nbsp; " + Math.round((banker / _0x5d80x6) * 100) + "%";
                document.getElementById("pstr").innerHTML = "เพลย์เยอร์ชนะ&nbsp;&nbsp; " + Math.round((player / _0x5d80x6) * 100) + "%";
                document.getElementById("tstr").innerHTML = "เสมอ&nbsp;&nbsp; " + Math.round((equal / _0x5d80x6) * 100) + "%";
                document.getElementById("redbar").style.width = Math.round((banker / _0x5d80x6) * 100) + "%";
                document.getElementById("blubar").style.width = Math.round((player / _0x5d80x6) * 100) + "%";
                document.getElementById("grnbar").style.width = Math.round((equal / _0x5d80x6) * 100) + "%"
            };
            document.getElementById("countB").innerHTML = banker;
            document.getElementById("countP").innerHTML = player;
            document.getElementById("countT").innerHTML = equal;
			document.getElementById("bfoot2").innerHTML = banker;
            document.getElementById("pfoot2").innerHTML = player;
            document.getElementById("tfoot2").innerHTML = equal;
            _0x5d80xb = false
        }
    }

    function _0x5d80x22() {
        $.ajax({
            url: "database/getresult-sexy.php",
            type: "GET",
            success: function (_0x5d80x10) {
                var _0x5d80x23 = JSON.parse(_0x5d80x10);
                var _0x5d80x24 = [];
                $.each(_0x5d80x23, function (_0x5d80x25, _0x5d80x26) {
                    _0x5d80x24.push(_0x5d80x26.Data)
                });
                _0x5d80x1f(_0x5d80x24[_0x5d80x4 - 1])
            }
        })
    }
    _0x5d80x22();
    setInterval(_0x5d80x22, 2000)
})