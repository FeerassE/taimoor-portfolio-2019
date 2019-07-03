


$(function() {
    $('.lazy').lazy({
        effect: "fadeIn",
        effectTime: 2000,
        threshold: 0
    });
});

// for(let i = 1; i <= 115; i++){
//     $(".gallery").append(`<div class="gallery-image"><img class="lazy" data-src="./photos/photo-${i}.jpg"/></div>`)
// }


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
