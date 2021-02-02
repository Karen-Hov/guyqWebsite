 $(function() {
 	$( window ).on('load',function() {
   $('.loader').hide();
});

 $(".owl-carousel.onePart").owlCarousel({
	items: 1,
	loop:true,
	navigation : false,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem:true,

    smartSpeed: 1000,


  });

 $(".owl-carousel.owlPricing").owlCarousel({
	
	loop:true,
	navigation : false,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem:true,
    smartSpeed: 1000,
    responsive : {
    // breakpoint from 0 up
    0 : {
        items: 1,
    },
    // breakpoint from 480 up
    768 : {
       items: 2,
    },
     
}
  });

 $('.mobileMenuIcon').on('click' , function(){
 	$('.mobileMenuHiddenInWeb').addClass('show');
 })
 $('.closeMenuMobile').on('click' , function(){
 	$('.mobileMenuHiddenInWeb').removeClass('show');
 })
 var next = $('.dataForNavigation').attr('data-right')
 var prev = $('.dataForNavigation').attr('data-left')

$('.owl-next span').html('<img class="arrowsOwlCarousel" src="'+next+'" alt="">')
$('.owl-prev span').html('<img  class="arrowsOwlCarousel" src="'+prev+'" alt="">')

// $('#form-data').submit(function () {
//    var route = $('form-data').data('route');
//    var form_data = $(this);
//    $.ajax({
//        type:'POST',
//        url:route,
//        data:form_data.serialize(),
//        success:function (Response) {
//            console.log(route);
//            console.log(form_data);
//        }
//    });
//
// e.preventDefault()
// })
})
