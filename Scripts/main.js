function search(){

    document.getElementById("searchButton").style.display="none";
    document.getElementById("loader").style.display="block";
    document.getElementById("addTicket").style.display="none";
    
    console.log("search button clicked");
    sqlconn = new XMLHttpRequest();
    sqlconn.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("loader").style.display="none";
            document.getElementById("addTicket").style.display="block";
            document.getElementById("Test").innerHTML = this.responseText;
        }
    }
    sqlconn.open("GET", "../EECS447/Scripts/APIs/search.php", true);
    sqlconn.send();
}


