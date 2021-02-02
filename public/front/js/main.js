 $(function() {
 	$( window ).on('load',function() {
     $('.loader').hide();
     var height = $('header').outerHeight()+ $('footer').outerHeight()+50;
     var bodyheigt = $(window).outerHeight()
        var bodyPart = bodyheigt -  height;
        console.log(bodyheigt +','+bodyPart+','+height)
        $('body>div').css({'min-height':bodyPart})
     // console.log(height +","+bodyheigt)
     // if(height > bodyheigt ) {
     //   $('body').removeClass('fixed');
     // }
  });



$( window ).on('load', function(){
  $('.successOrErrorMessage').addClass('show')
  $('.successOrErrorMessage').css({
    'opacity':'1'
  })
    console.log('s');
    $('.successOrErrorMessage').delay(1500).fadeOut(2000)
})






  const items = document.querySelectorAll(".accordion a");

  function toggleAccordion(){
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
  }

  items.forEach(item => item.addEventListener('click', toggleAccordion));
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


$('.showMoreText').on('click', function() {
    var text = $(this).closest('.textInfo').find('p').html();
    $('.modalForAboutInfo').addClass('allinfo');
    $('body').css({'overflow':'hidden'})
    $('.modalForAboutInfo').find('p.text').html(text);

})
$('.modalForAboutInfo p.close span').on('click', function() {
  $('.modalForAboutInfo').removeClass('allinfo');
    $('body').css({'overflow':'auto'})
})
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
