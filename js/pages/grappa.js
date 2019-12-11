var Commenti = document.getElementsByClassName("comment");
for (i=0;i<5; i++){
    if(Commenti[i].innerText == ""){
        Commenti[i].style.display = 'none';
    }
}
