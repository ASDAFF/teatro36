jQuery(document).ready(function($){


  $('#submit').click(function(){
   var data = $('#userForm').serializeArray();

    $.post("/ajax/reviews.php", data)
        .done(function(data) {
          if(data){
          $('.rsform-block').remove();
          $('.mes').remove();
          $('.cp_form_title').html('<span style="line-height: 1.3em;">Спасибо за отзыв, после проверки администратором он будет опубликован на сайте.</span>');
          }else{
            $('.mes').text('Заполните, пожалуйста, все обязательные поля.');
          }

        });

    return false;
  });


  $(".popup-yes").click(function () {
    $.cookie("popup", "24house", {expires: 0});
    $("#parent_popup").hide();
    $('html, body').removeClass('overflow');
  });
  if ($.cookie("popup") == null  ){
    $("#parent_popup").show();
    $('html, body').addClass('overflow');
  }else{
    $("#parent_popup").hide();
    $('html, body').removeClass('overflow');
  }

  $('.menu-phone').html('<a href="tel:'+$('.phone_number').text()+'">'+$('.phone_number').text()+'</a>');
  $('.d_product_title').append('<div class="info">'+$('.jshop_prod_description').html()+'</div>');

  $('.navbar-toggle').click(function(){
    $('.navbar-hidden').toggleClass('nav-hide nav-show');
    $('html, body').toggleClass('overflow');
  });

  $('.navbar-close').click(function(){
    $('.navbar-hidden').toggleClass('nav-hide nav-show');
    $('html, body').toggleClass('overflow');
  });

  $('.scrollbar-inner, .scrollbar-inner1').scrollbar();
  $(".jshop .jshop .images_shop").fancybox();
  $('input, textarea').placeholder();

  $("#owl-demo").owlCarousel({
    autoPlay: false,
    items : 3,
    stopOnHover: true,
    navigation: true,
    navigationText: ["предыдущий","следующий"],
    pagination: false,
    itemsDesktop : [1024,3]
  });

  $("#owl-demo1").owlCarousel({
    autoPlay: 6000,
    items : 3,
    stopOnHover: true,
    navigation: true,
    navigationText: ['',''],
    pagination: false,
    itemsDesktop: [1024,3],
    itemsDesktopSmall: [992,2],
  });

  $('.page_actor .actor_slider').html($('.page_actor .jshop').html());
  $('.page_actor .actor_slider').children().last().remove();
  $(".page_actor .actor_slider .images_shop").click(false).removeAttr("href");

  /*$('.page_actor .actor_slider').owlCarousel({
    autoPlay: false,
    items : 1,
    singleItem:true,
    stopOnHover: true,
    navigation: true,
    navigationText: ['',''],
    pagination: false,
  });*/

  /*$(".page_actor .actor_slider .images_shop img").each(function(i, e){
    var el = $(e);
    if(el.width() > el.height()){
      el.css({
        width: 'auto',
        minHeight: '386px',
        marginLeft: -(el.height()/2)+'px',
      });
    }
  });*/

  /*$(".page_actor .actor_slider .images_shop img").each(function(){
    $(this).parent().css('background-image', 'url('+$(this).attr('src')+')');
    $(this).remove();
  });*/

  if($('.page_actor').length > 0){
    $('.content,.content_block').css('height','auto');

    $(window).on('load scroll', function(){
      if($(window).scrollTop()+$(window).height() >= $('.footer').offset().top){
        $('.page_actor .d_product_title').removeClass('fixed');
      }else{
        $('.page_actor .d_product_title').addClass('fixed');
      }
    });
  }
  function resizeWindowAction(){
    if($(window).width() <= 768 ){
      $(".form_open").fancybox({
        topRatio:0.25,
        fitToView:false,
        width: "100%",
        height: "100%",
        margin:0,
        autoSize: false,
        scrolling: 'no',
        beforeShow: function(){
          $('html, body').toggleClass('overflow');
        },
        afterClose: function(){
          $('html, body').toggleClass('overflow');
        } 
      });
    }else{
      $(".form_open").fancybox({topRatio:0.25,tpl:{closeBtn:'<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>'}});
    }

    if($(window).width() <= 480 ){

      if($("#owl-demo2").data('owlCarousel')){
        $("#owl-demo2").data('owlCarousel').destroy();
        $("#owl-demo2").removeClass('owl-carousel');
      }

      $('#issues').owlCarousel({
        autoPlay: 6000,
        items : 3,
        stopOnHover: true,
        navigation: true,
        navigationText: ['',''],
        pagination: false,
        itemsDesktop: [1024,3],
        itemsDesktopSmall: [992,2],
      });

    }else{
      $("#owl-demo2").owlCarousel({
        autoPlay: 6000,
        items : 1,
        singleItem:true,
        stopOnHover: true,
        navigation: true,
        autoHeight : false,
        navigationText: ["предыдущий","следующий"],
        pagination: false,
      });

      if($("#issues").data('owlCarousel')){
        $("#issues").data('owlCarousel').destroy();
        $("#issues").removeClass('owl-carousel');
      }
    }
  }

  resizeWindowAction();

  var resizeId;
  $(window).resize(function() {
    clearTimeout(resizeId);
    resizeId = setTimeout(resizeWindowAction, 200);
  });

  $('.deeper.parent span').click(function(){
    $(this).siblings().toggleClass('subopen');
  });
  
  function resizeWindowContent(){
    if($('.page_actor').length == 0){
      if($(window).width() <= 480){
        $height = $(window).width()*1.5;
        $('.content, .content1, .content_block, #owl-demo .item,#owl-demo .image_block').css('height',$height);
        //$('.body.in').css('background-postion','center top '++'px');
      }else{
        $('.content, .content1, .content_block, #owl-demo .item,#owl-demo .image_block').css('height','');
      }
    }
  }

  resizeWindowContent();
  var resizeWId
  $(window).resize(function() {
    clearTimeout(resizeWId);
    resizeId = setTimeout(resizeWindowContent, 200);
  });
});