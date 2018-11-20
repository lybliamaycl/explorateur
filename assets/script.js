        /* AJAX */

var liens = document.getElementsByClassName('dossier');
var dossier = new Array();

console.log(liens);

    for( i = 0 ; i < liens.length; i++){
        liens[i].addEventListener('click', getPath);
        liens[i].addEventListener('click', getArbo);
        liens[i].addEventListener('click', displayWelcome);
    }

    function getPath(e){
        e.preventDefault();
        
        var dossier = this.getAttribute('data-name');
        console.log(dossier);
        
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("affichage").innerHTML = this.responseText;
                console.log(this.responseText);
                for( i = 0 ; i < liens.length; i++){
                    liens[i].addEventListener('click', getPath);
                }
            }
        };
        xml.open("GET", "assets/traitement.ajax.php?dossier=" + dossier, true);
        xml.send();      
              
    }

    function getArbo(e){
        e.preventDefault();
        
        var dossier = this.getAttribute('data-name');
        console.log(dossier);
        
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("arbo").innerHTML = this.responseText;
                console.log(this.responseText);
                for( i = 0 ; i < liens.length; i++){
                    liens[i].addEventListener('click', getArbo);
                }
            }
        };
    xml.open("GET", "arbo.php?dossier=" + dossier, true);
    xml.send();
    }
  
    function displayWelcome(e){
        e.preventDefault();
        document.getElementById('welcome').style.display= "none";
    }