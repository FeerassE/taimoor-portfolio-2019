
var dir = "./photos/";
var fileextension = ".jpg";

console.log("Ajax starting");
$.ajax({
    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
    url: dir,
    success: function (data) {
        console.log("Found data");
        //List all .png file names in the page
        $(data).find("a:contains(" + fileextension + ")").each(function () {
            var filename = this.href.replace(window.location.host, "").replace("http://", "");
            $(".gallery").append(`<div class="gallery-image"><img src="${dir}${filename}"/><svg</div>`)
        });
    }
});


$(function() {
    $('.lazy').Lazy();
});

for(let i = 1; i <= 115; i++){
    $(".gallery").append(`<div class="gallery-image"><img class="lazy" data-src="./photos/photo-${i}.jpg"/></div>`)
}



// --- Modal --- //

$(".gallery-image").click(function(event){
    let source = $(this).find('img').attr('src')

    $(".main").append(`<div class="modal"></img><img class="modal-img" src=${source}></img></div>`);
    $("body").addClass("modal-open");

})


$("body").on("click",".modal",function(event){
    $(".modal").remove();
    $("body").removeClass("modal-open");
})
