var isOverlayOpened = false;
var typingTimer;
var spineerVisible = false;
var searchInput = $(".lc-searchInput");
const addMenuBackground = () =>{
    const bodyOffset = document.body.scrollTop || document.documentElement.scrollTop ;
    const navigation = $("header nav");
    if(bodyOffset > 0 ) {
        navigation.addClass("lc-nav-background");
    } else 
    navigation.removeClass("lc-nav-background");
}
$(window).scroll(()=>{
    addMenuBackground();
    if(isOverlayOpened){
        closeOverlay();
    }
    });
//Search logic

//methods
const openOverlay = () =>{
    $(".searchOverlay").addClass("searchOverlay-active");
    searchInput.val('');
    //wait for the overlay to be visible to focus 
    setTimeout(() =>{searchInput.focus();},300);
    isOverlayOpened = true;
}
const closeOverlay = ()=>{
    $(".searchOverlay").removeClass("searchOverlay-active");
    isOverlayOpened = false;
}
const getResults = ()=>{
    window.location.href = livechateData.root_url +'/search?InputValue='+ searchInput.val(); 
}
const fetchResults = ()=>{
    var searchValue = getQueryVariable('InputValue');
    $.getJSON(livechateData.root_url + '/wp-json/wp/v2/posts?search=' + searchValue ,(results)=>{
        $("#lc-searchResults").html(`<div>
        ${results.length ? `<ul>` : `<p>No Results match this search</p>`}
        ${results.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join(' ')}
        ${results.length ? `</ul>` : ``}
        </div>`);
        spineerVisible = false;
    });
}
//events
$(".lc-searchTrigger").on("click",()=>{
    if(!isOverlayOpened)
    {
    openOverlay();
    $("header nav").addClass("lc-nav-background");
    }
    else if(isOverlayOpened)
    closeOverlay();
});
$(".lc-searchOverlayClose").on("click",()=>{
    closeOverlay();
});
$("#button").on("click",()=>{
    getResults();
});
searchInput.on("keydown",(event)=>{
    if(event.keyCode == 13){
        getResults();
    }
})
/*const typingLogic = ()=>{
    clearTimeout(typingTimer);
    if(!spineerVisible){
        $("#lc-searchResults").html(`<div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>`);
      spineerVisible = true;
    }
   typingTimer = setTimeout(getResults,750); 
}
var param1var = getQueryVariable("param1");
*/
const getQueryVariable = (variable) => {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
}


/*const append = (value)=>{
    var searchValue = window.location.search.substring(1).split('=');
    $("#lc-searchResults").html(`<div>
    <h2>${searchValue}</h2>`);
}
$(".lc-searchInput").on("keyup",()=>{
    //typingLogic();  
    typingLogic(); 

});*/