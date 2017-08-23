function populateScores()
{
var sel=document.getElementById("scorelist.php")
var result;
result=sel.options[sel.selectedIndex].value;
var scores=result.split('#');
document.getElementById("name").value=scores[0];
document.getElementById("first").value=scores[0];
document.getElementById("second").value=scores[0];
document.getElementById("third").value=scores[0];
document.getElementById("fourth").value=scores[0];
document.getElementById("fifth").value=scores[0];
}
