function checkForm() {
	var x = document.forms["purchase"]["html"].value;
    if (x < 0 || isNaN(x)) {
        alert("HTML value must be valid");
        return false;
    }
	var y = document.forms["purchase"]["css"].value;
    if (y < 0 || isNaN(y)) {
        alert("CSS value must be valid");
        return false;
    }
	var z = document.forms["purchase"]["js"].value;
    if (z < 0 || isNaN(z)) {
        alert("JS value must be valid");
        return false;
    }
	var w = document.forms["purchase"]["php"].value;
    if (w < 0 || isNaN(w)) {
        alert("PHP value must be valid");
        return false;
    }
}