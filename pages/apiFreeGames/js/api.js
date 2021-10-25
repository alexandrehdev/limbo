function loadFreegames() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var tags = JSON.parse(this.responseText);
     console.log(tags);
    }
  };
  xhttp.open("GET", "https://www.freetogame.com/api/games", true);
  xhttp.send();
}
loadJson();