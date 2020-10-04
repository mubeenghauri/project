$("#search").on('input', ()=>{
    var value = document.getElementById("search").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          document.getElementById("main-box")["innerHTML"] = this.responseText;
        }
      };
    xhttp.open("POST", "include/search.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("q="+value);
});


