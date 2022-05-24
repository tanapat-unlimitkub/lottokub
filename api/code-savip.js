$(document).ready(function () {
    var _0x19edx2 = JSON.parse('\[\{"data":"tppp"\},\{"data":"bpbp"\},\{"data":"tpbb"\},\{"data":"pbbp"\},\{"data":"bbpb"\},\{"data":"bptp"\},\{"data":"pbpb"\},\{"data":"tbpb"\},\{"data":"pppb"\},\{"data":"bbtb"\},\{"data":"pbtp"\},\{"data":"bbbb"\},\{"data":"pptp"\}\]');

    function _0x19edx3(_0x19edx4) {
        if (predict == _0x19edx4) {
            win++;
            rate = Math.round((win / active) * 100);
            _0x19edx5 = "winrate" + room;
            winhtml = rate + "%";
            document.getElementById(_0x19edx5).style.color = "#26e452";
            document.getElementById(_0x19edx5).innerHTML = winhtml;
            stack = 1
        } else {
            if (predict != "") {
                let _0x19edx5 = "winrate" + room;
                if (active > 0) {
                    if (stack < 4) {
                        active--;
                        stack++
                    } else {
                        rate = Math.round((win / active) * 100);
                        winhtml = rate + "%";
                        document.getElementById(_0x19edx5).style.color = "#26e452";
                        document.getElementById(_0x19edx5).innerHTML = winhtml;
                        stack = 1
                    }
                } else {
                    winhtml = "สับไพ่";
                    document.getElementById(_0x19edx5).style.color = "#c90000";
                    document.getElementById(_0x19edx5).innerHTML = winhtml
                }
            }
        };
        if (slot.length == _0x19edx2[0].data.length - 1) {
            slot = slot.substring(1, _0x19edx2[0].data.length - 1)
        };
        slot += _0x19edx4;
        for (let _0x19edx6 = 0; _0x19edx6 < _0x19edx2.length; _0x19edx6++) {
            if (slot == _0x19edx2[_0x19edx6].data.substring(0, _0x19edx2[_0x19edx6].data.length - 1)) {
                active++;
                predict = _0x19edx2[_0x19edx6].data.charAt(_0x19edx2[_0x19edx6].data.length - 1);
                break
            };
            predict = ""
        }
    }

    function _0x19edx7(_0x19edx8) {
        for (room = 0; room < 16; room++) {
            res = _0x19edx8[room].split("");
            if (res[0] != "w") {
                active = 0;
                win = 0;
                slot = "";
                stack = 1;
                predict = "";
                for (let _0x19edx6 = 0; _0x19edx6 < 72; _0x19edx6++) {
                    if (res[_0x19edx6] == "B") {
                        _0x19edx3("b")
                    } else {
                        if (res[_0x19edx6] == "P") {
                            _0x19edx3("p")
                        }
                    }
                }
            } else {
                let _0x19edx5 = "winrate" + room;
                let _0x19edx9 = "สับไพ่";
                document.getElementById(_0x19edx5).style.color = "#c90000";
                document.getElementById(_0x19edx5).innerHTML = _0x19edx9
            }
        }
    }

    function _0x19edxa() {
        $.ajax({
            url: "database/getresult.php",
            type: "GET",
            success: function (_0x19edxb) {
                var _0x19edxc = JSON.parse(_0x19edxb);
                var _0x19edxd = [];
                $.each(_0x19edxc, function (_0x19edxe, _0x19edxf) {
                    _0x19edxd.push(_0x19edxf.Data)
                });
                _0x19edx7(_0x19edxd)
            }
        })
    }
    _0x19edxa();
    setInterval(_0x19edxa, 5000)
})