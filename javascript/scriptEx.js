
//console.log("Test 123");
//document.write(5+6);

/*바탕 화면 바꾸기*/
/*
function blackClick() {
  document.getElementById("target").className ="white";
}

function whiteClick() {
  document.getElementById("target").className ="black";
}
*/

/*id 로 접근해보자*/
var whiteBtn = document.getElementById("whiteBtn");
var blackBtn = document.getElementById("blackBtn");

whiteBtn.addEventListener('click', function(){
  document.getElementById("target").className ="black";
})

blackBtn.addEventListener('click', function(){
  document.getElementById("target").className="white";
})
