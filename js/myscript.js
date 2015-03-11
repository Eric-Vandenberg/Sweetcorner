var pages={
    Home: 
        {pageUrl : "index.php?pages=home.php",},
    About : 
        { pageUrl : "index.php?pages=about.php"},
    Services : 
        { pageUrl :"index.php?pages=services.php"},
    Contact : 
        { pageUrl : "index.php?pages=contact.php"}
};



$("document").ready(function(){

//do stuff when the document is ready!
/*$(".main-nav li a").each(function(){
        //do something to each item found
        $(this).click(function(){
            var my_page = pages[$(this).text()];
            console.log(my_page);
            load_page(my_page.pageUrl);
        });
    });*/
    //create_menu();
});


/*<li data-url="home.html"><a >Welcome</a></li>*/
function create_menu(){
    var main_nav_ul = $("#menu ul");
    for(var index in pages){
        console.log("The index is "+index);
        var li = $("<li/>");
        var a = $("<a/>").text(index);
        (function(){
            var my_index = index;
            li.on("click","a",function(){
                var my_page = pages[my_index];
                load_page(my_page.pageUrl);
            });
        })();
        li.append(a);
        //a.appendTo(li);
        main_nav_ul.append(li);
        if(pages[index].default==true){
            //load_page(pages[index].pageUrl);
        }
    }
}


function load_page(page_url){
    window.location=page_url;
    return;//temporarily disable this function
    //load the indicated page into the #main_content section
    $.get(page_url,function(data){
        $("#body").html(data);
    });
    
}