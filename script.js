window.onload = function() {


  var findings = document.getElementsByClassName('element');
  insertSubMenus(findings);

  var firsts = document.getElementsByClassName('num');
  var thirds = document.getElementsByClassName('third');
  addClickEvent(firsts, "findingLabel");
  addClickEvent(thirds, "colourLabel");
}

function insertSubMenus(list) {
  for(var i = 0; i < list.length; i ++) {
    var innerhtml = list[i].innerHTML;
    innerhtml += "<div class='inner-dropdown-content'>";
    for(var j = 0; j <= 9; j ++) {
      innerhtml += "<a class='num'>" + j + "</a>";
    }
    innerhtml += "</div></div>";
    list[i].innerHTML = innerhtml;
    document.getElementsByClassName("inner-dropdown-content")[i].style.marginTop = -42*(i+1)/2 + ((i+1)%2 != 0 ? -21 : -42) + "px";
  }
}

function addClickEvent(list, label) {
  for(var i = 0; i < list.length; i ++) {
    list[i].onclick = function() {
      var parent = this.parentElement.parentElement.querySelector(".first");
      document.getElementById(label).innerText = ((parent != null) ? parent.id + this.innerText : this.id);
    };
  }
}


function insert() {
  var finding = document.getElementById("findingLabel").innerText;
  var colour = document.getElementById("colourLabel").innerText;
  var errorText = document.getElementsByClassName("error-text");
  if(finding != "Findings" && colour != "Select Colour") {
    var barcode = finding + "-" + colour + "-";
    document.getElementById("b-field").value = barcode;
    //console.log(document.getElementsByClassName("b-field")[0].value);
    //errorText[0].innerText = "Inserted the barcode: " + barcode;
    return true;
  } else {
    errorText[0].innerText = "You did not select some stuff...";
    return false;
  }
}
