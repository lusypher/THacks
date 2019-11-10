function selectAll() {
    var results = document.getElementsByClassName("results")[0];
    var indivResults = results.children;
    for (var i = 0; i < indivResults.length; i++) {
	indivResults[i].children[0].checked = true;
    }
}

function deselectAll() {
    var results = document.getElementsByClassName("results")[0];
    var indivResults = results.children;
    for (var i = 0; i < indivResults.length; i++) {
        indivResults[i].children[0].checked = false;
    }
}
function countClicks() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("clicks").innerHTML = localStorage.clickcount;
  } else {
    document.getElementById("clicks").innerHTML = "Sorry, your browser does not support web storage...";
  }
}