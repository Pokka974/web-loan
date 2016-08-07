function spookEtape(div) {
    var myClass = this.document.getElementsByClassName("etape");
    var i = 0;
    for (; i < myClass.length ; i++) {
        if (myClass[i].style.display == "none")
            myClass[i].style.display = "block";
        else
            myClass[i].style.display = "none";
    }

}

function spookCategorie(div) {
    var myClass = this.document.getElementsByClassName("categorie");
    var i = 0;
    for (; i < myClass.length ; i++) {
        if (myClass[i].style.display == "none")
            myClass[i].style.display = "block";
        else
            myClass[i].style.display = "none";
    }

}


function spookIdCategorie(id) {
    if (typeof id == "string") {
        id = document.getElementById(id);
        if (id.style.display == "none") {
            id.style.display = "block";
        } else {
            id.style.display = "none";
        }
    }
}

function spookIdArticle(id) {
    //if (typeof id == "string") {
    //    id = document.getElementById(id);
    //    if (id.style.display == "none") {
    //        id.style.display = "block";
    //    } else {
    //        id.style.display = "none";
    //    }
    //}

    if (typeof id == "string")
        id = document.getElementById(id);
    var parent = id.parentNode;
    parent.className.style.background.color: blue;
    //var tabArticles = parent.id.querySelectorAll(".article")
    //var i;
    //for (i = 0; i < tabArticles.length; i++) {
    //    if (tabArticles[i].id == id)
    //        tabArticles[i].style.display = "block";
    //    else
    //        tabArtclies[i].style.display = "none";
    //}
}

function addEvent(obj, event, fct){
    if (obj.attachEvent)
        obj.attachEvent("on"+event, fct);
    else
        obj.addEventListener(event, fct, true);
}

