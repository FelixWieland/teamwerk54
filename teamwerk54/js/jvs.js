//Validate Email:
function validEmail(e) {
  var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
  return String(e).search (filter) != -1;
}
//_

//Scrolling:
function scrollto(element){
  var comp_heigth = $(window).height();
  var extender_height = $('#fw-extended').height();
  var scroller = (comp_heigth - extender_height)/2
  $('html, body').animate({ scrollTop: ($(element).offset().top-scroller)}, 'medium');
};
//_

//CreateHTMLfromJSON
function JSONtoHTML(json) {
  var Bereich = json.Bereich;
}

function switchC(){
  var color = document.getElementById('nvbic').style;
  if(color.backgroundColor != 'rgb(51, 51, 51)'){
    color.backgroundColor = 'rgb(51, 51, 51)';
    color.borderColor = 'rgb(51, 51, 51)';
  }
  else {
    setTimeout(function(){
      color.backgroundColor = '#3d8fca';
      color.borderColor = '#3d8fca';
    }, 280);
   }
}

$('#register_btn').click(function() {
  $('#reg_or_log_form').toggle('fast');
  $('#register_form').toggle('fast');
  $('#div_backico').toggle('fast');
});
$('#login_btn').click(function() {
  $('#reg_or_log_form').toggle('fast');
  $('#login_form').toggle('fast');
  $('#div_backico').toggle('fast');
});

$('#div_backico').click(function() {
  $('#div_backico').toggle('fast');

  $('#login_form').css('display', 'none');
  $('#register_form').css('display', 'none');

  $('#reg_or_log_form').toggle('fast');
});

$(document).ready(function() {
  var hhd = $(window).height();
  var whd = $(window).width();
  $('#profil').css('height', String((hhd/100)*65)+'px');
  $('#cont').css('height', String(((hhd/100)*65)-35)+'px');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
  $('#login_register_chooseing_and_doing').css('height', String(((hhd/100)*65)-35)+'px');
  });});

$(window).resize(function() {
  var hhd = $(window).height();
  var whd = $(window).width();
  $('#cont').css('height', String(((hhd/100)*65)-35)+'px');
  $('#login_register_chooseing_and_doing').css('height', String(((hhd/100)*65)-35)+'px');
  $('#profil').css('height', String((hhd/100)*65)+'px');

  if(bool_extended == true && $(document).width() > 768){
    $('.fw-extender-active').remove();
  }
});

function close_extender() {
  $('.fw-extender-active').remove();
  var bool_extended = false;
  var string_extended_content = null;
  var obj_extended_element = null;
  var obj_extended_clicked_element = null;
}

$('#searchjumper').click(function() {
  //searchbar
  $('#searchbar').focus();
  $("html, body").animate({
      scrollTop: 0
  }, 200);
  return false;
});
$('#profils').click(function() {
  $('#profil').toggle("fast");
});
$('#turndown').click(function() {
  $('#profil').toggle("fast");
});
$('#turndown_chat').click(function() {
  $('#chat').toggle("fast");
});
$('#turnup_chat').click(function() {
  $('#chat').toggle("fast");
});
