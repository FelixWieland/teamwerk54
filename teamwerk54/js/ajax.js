// Registrieren
$('#validate_btn_register').click(function() {
  //* Registrations IDs sind: Email: input_reg_email
  //*                         Vorname: input_reg_vorname
  //*                         Nachname: input_reg_nachname
  //*                         Passwort: input_reg_passwort

  //Hole Infos aus den Inputfeldern
  var vorname = $('#input_reg_vorname').val();
  var nachname = $('#input_reg_nachname').val();
  var email = $('#input_reg_email').val();
  var passwort = $('#input_reg_passwort').val();

  //checke ob alle felder gefüllt sind
  if (vorname.trim() == '' || nachname.trim() == '' || email.trim() == '' || passwort.trim() == '') {
    //Wenn ein Feld leer ist bricht die Funktion ab
    return;
  }
  //Prüfe ob die Email gültig ist
  if (validEmail(e) != true) {
    //Wenn sie nicht gültig ist bricht die Funktion ab
    return;
  }
  //Ajax - Sendet Daten an den Server und empfängt die komplette ausgabe
  $.post('secure.php', {
    vorname: vorname,
    nachname: nachname,
    email: email,
    passwort: passwort
  }, function(data) {

  });

});

// Login
$('#validate_btn_login').click(function() {
  //* Login IDs sind: Email: input_log_email
  //*                 Passwort: input_log_passwort


});

//Workshop aufrufen
$('#fw-workshop_und_bilder').click(function() {
  //* __
  $.post(s_ajax_workshop, {}, function(data) {
    $('#fw-mainpage').html(data);
    $('html, body').animate({scrollTop: $("#fw-mainpage").offset().top - 70}, 300);
    string_page = 'workshop';
  });
});
$('#fw-firmen').click(function() {
  //* __
  $.post(s_ajax_firmen, {}, function(data) {
    $('#fw-mainpage').html(data);
    $('html, body').animate({scrollTop: $("#fw-mainpage").offset().top - 70}, 300);
    string_page = 'firmen';
  });
});
$('#fw-kontakt').click(function() {
  //* __
  $.post(s_ajax_kontakt, {}, function(data) {
    $('#fw-mainpage').html(data);
    $('html, body').animate({scrollTop: $("#fw-mainpage").offset().top - 70}, 300);
    string_page = 'kontakt';
  });
});
$('#nvbic').click(function() {
  //* __
  window.location.href = s_index_path;
});

//Info-Extender - erkennt welches element von der Klasse .fw-extender man geklickt hat
$(document).on("click", ".fw-extender", function() {

  //checkbox überprüfen - am besten nur LIKEbare elemente checken
  if($('#fw_adv_checkbox').prop('checked')) {
    return;
  }

  var elm = $(this);
  var choose_extender = 'none';
  var name = elm.attr('name'); //Liest den namen des Bildes aus

  if (name == 'fw-workshop') {
    choose_extender = name;
  } else if (name == 'fw-ausbildungen_und_studium') {
    choose_extender = name;
  } else if (name == 'fw-firmen') {
    choose_extender = name;
  }

  if (choose_extender != 'none') {

    //entferne alle offenen extends
    $('.fw-extender-active').remove();

    var position = elm.position();
    var width = $(window).width();
    var position_triangle_margin_left;
    //Extend
    if (width < 768) {
      //XS - 1
      //mitte des bildschirms
      position_triangle_margin_left = position.left + ( elm.width() / 2 );
    } else if (width < 992) {
      //SD - 2
      position_triangle_margin_left = position.left + ( elm.width() / 2 );

    } else if (width < 1350) {
      //MD - 3
      position_triangle_margin_left = position.left + ( elm.width() / 2 );

    } else if (width >= 1350) {
      //LD - 4
      position_triangle_margin_left = position.left + ( elm.width() / 2 );
    }

    var all_workshop_elm = document.getElementsByName(elm.attr('name'));
    var myelm = null;
    var prev = null;
    $(all_workshop_elm).each(function(index) {
      if (myelm != null){
        if ($(this).position().top != position.top){
          return;
        }
        else {
          prev = $(this);
        }
      }
      if ($(this).position().left == position.left && $(this).position().top == position.top) {
        myelm = $(this);
        prev = $(this);
      }
    });

    var extender_element = '<div id="fw-extended" class="fw-extender-active"><div id="fw-triangle-pointer">▲</div></div>';
    //SELECTOR MIT BINDESTRICHEN?
    //pfeil on resize
    //
    $(extender_element).insertAfter(prev);
    var margin_loader = (parseInt($('#fw-extended').height()) - 75) / 2;
    //<div class="fw-spinner"></div>

    $("<div class=\"fw-spinner\" style=\"margin-top: "+ margin_loader.toString() +"px;\"></div>").insertAfter('#fw-extended-closer');

    //$('#fw-extended-content').html("<div class=\"fw-spinner\" style=\"margin-top: "+ margin_loader.toString() +"px;\"></div>");
    $('#fw-triangle-pointer').css("top", ($('#fw-extended').position().top - 20).toString() + 'px');
    $('#fw-triangle-pointer').css("left", (position_triangle_margin_left-10).toString() + 'px');

    obj_extended_element = prev;
    obj_extended_clicked_element = elm;
    bool_extended = true;
    string_extended_content = $('#fw-extended');

    scrollto(document.getElementById('fw-extended'));

    //WICHTIG, VOR DEM EINFÜGEN DIE LADEANIMATION LÖSCHEN, UND ELEMENTE NACH DEM SCHLIESEN ICON EINFÜGEN

    var page = $(this).attr("name");
    var key = $(this).attr("data-azubikey");
    var value = $(this).attr("data-azubivalue");

    $.post(s_ajax_show_content, {"page": page, "key": key, "value": value}, function(data) {
      $(".fw-spinner").remove();
      $(data).insertAfter("#fw-triangle-pointer");//#fw-extended-closer
      var vw = $("#fw-left-area").width()-20;
      var vh = $("#fw-comp-area").height()-25;
      $("#fw-md-video").css("width", vw);
      $("#fw-md-video").css("height", vh);
      $(".fw-ausbildung-info-parent").css("height", vh-55);
    });



    console.log(margin_loader);
  }
});

//_ infinityScroll
$(document).ready(function() {
  var win = $(window);
	var loadDistance = 600;

	// Each time the user scrolls
	win.scroll(function() {
		// End of the document reached?
		if ($(document).height() - $(window).height() - $(window).scrollTop() < loadDistance ) {
      //detect wich page to reload
      //Ausbildungen
      if(string_page == 'ausbildungen_und_studium'){
        load_times++;
        zufiLikes_str = JSON.stringify(zufiLikes);
        $.post(s_ajax_ausbildung_und_studium, {'infinityScroll': 'true', 'times': load_times, 'zufiData': zufiLikes_str}, function(data) {
          zufiLikes = [];
          $('#fw-mainpage').append(data);
        });
      }
      //Firmen
      else if(string_page == 'firmen'){
        $.post(s_ajax_firmen, {'infinityScroll': 'true'}, function(data) {
          $('#fw-mainpage').append(data);
        });
      }
      //Workshop
      else if(string_page == 'workshop'){
        $.post(s_ajax_workshop, {'infinityScroll': 'true'}, function(data) {
          $('#fw-mainpage').append(data);
        });
      }
		}
	});
});

// "LIKE" von Ausbildungen
$(document).on("dblclick", ".fw-extender", function() {
  if(!$('#fw_adv_checkbox').prop('checked')) {
    return;
  }

  var elm = $('#fw-tw54like');

  var width = $(this).width();
  var height = $(this).height();

  var pos = $(this).position();

  elm.css('height', (height/4)*3);
  elm.css('width', width);

  elm.css('top', pos.top + (height/16)*3);
  elm.css('left', pos.left);

  elm.fadeIn('1000');

  //addLike to zufiLikes
  zufiLikes.push($(this).attr("data-azubikey"));

  setTimeout(function(){
  elm.fadeOut('500');
  }, 500);


  console.log("test");
});

$(document).on("click", "#fw-ausbildung-like", function() {
  $("#fw-ausbildung-like").toggleClass("OrangeColor");
  $("#fw-ausbildung-like").toggleClass("LightblueColor");
});
