var jasusE, jasusM;

function doTotal() {
    if (jasusE == true && jasusM == true) {
        var ems = document.getElementById("textE").value;
        var mms = document.getElementById("textM").value;
        sum = parseFloat(ems) + parseFloat(mms);
        document.getElementById("textTotal").value = sum;
        document.getElementById("btnPer").disabled = false;
    } else
        alert("Data is not validated");

}

function doPer() {
    var per = sum * 100 / 200;
    document.getElementById("textPer").value = per;
}

function chkEngMarks() {
    var ems = document.getElementById("textE").value;
    if (ems.length == 0) {
        document.getElementById("textE").style.backgroundColor = "red";
        document.getElementById("errEng").innerHTML = " (Fill Marks Plz...)";
        document.getElementById("errEng").style.color = "red";
        jasusE = false;


    } else {
        document.getElementById("textE").style.backgroundColor = "white";
        document.getElementById("errEng").innerHTML = " [OK]";
        document.getElementById("errEng").style.color = "green";
        jasusE = true;

    }
}

function chkMathMarks() {
    var mms = document.getElementById("textM").value;
    if (mms.length == 0) {
        document.getElementById("textM").style.backgroundColor = "red";
        document.getElementById("errMath").innerHTML = " (Fill Marks Plz...)";
        document.getElementById("errMath").style.color = "red";
        jasusM = false;



    } else {
        document.getElementById("textM").style.backgroundColor = "white";
        document.getElementById("errMath").innerHTML = " [OK]";
        document.getElementById("errMath").style.color = "green";
        jasusM = true;


    }
}
