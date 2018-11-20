      /* BARRE DE NAVIGATION */

var leftbar = document.getElementById('leftbar');
var toto = document.getElementById('toto');
var mainbloc = document.getElementById('mainbloc');


leftbar.addEventListener('mouseenter', function(e){

    if(toto.classList.contains('invisible')){
        toto.classList.replace('invisible', 'visible');
        leftbar.classList.replace('col-lg-1', 'col-lg-3');
        mainbloc.classList.replace('col-lg-11', 'col-lg-9');
        leftbar.classList.replace('col-md-2', 'col-md-4');
        mainbloc.classList.replace('col-md-10', 'col-md-8');
    }

}); 

leftbar.addEventListener('mouseleave', function(e){

    if(toto.classList.contains('visible')){
        toto.classList.replace('visible', 'invisible');
        leftbar.classList.replace('col-lg-3','col-lg-1');
        mainbloc.classList.replace('col-lg-9','col-lg-11');
        leftbar.classList.replace('col-md-4', 'col-md-2');
        mainbloc.classList.replace('col-md-8', 'col-md-10');     
    }

});
