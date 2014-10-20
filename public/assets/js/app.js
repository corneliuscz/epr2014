/*jslint browser: true*/
/*global $, jQuery, alert*/

$(function () {
  "use strict";
  /* **************************** */
  /*  Smooth scrolling to anchor  */
  /* **************************** */


  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      var targetOffset = target.offset().top;

      // Change URL if possible
      if (history.pushState) {
        history.pushState(null, null, this.hash);
      }

      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          //scrollTop: target.offset().top
          scrollTop: targetOffset-40
        }, 500);
        return false;
      }
    }
  });
});

/*
 * Skryjeme flash zprávy po nějaké době 
 */

window.setTimeout(function() {
    $(".flash").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);


/*
 * Skript generující Google Mapu
 */

google.maps.event.addDomListener(window, 'load', init);

var map;

function init() {
  var mapOptions = {
    center: new google.maps.LatLng(49.830983,18.162889),
    zoom: 16,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.DEFAULT,
    },
    disableDoubleClickZoom: true,
    mapTypeControl: false,
    scaleControl: true,
    scrollwheel: false,
    panControl: true,
    streetViewControl: true,
    draggable : true,
    overviewMapControl: true,
    overviewMapControlOptions: {
      opened: false,
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [
      {
        featureType: 'water',
        elementType: 'all',
        stylers: [
          { hue: '#7fc8ed' },
          { saturation: 55 },
          { lightness: -6 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'water',
        elementType: 'labels',
        stylers: [
          { hue: '#7fc8ed' },
          { saturation: 55 },
          { lightness: -6 },
          { visibility: 'off' }
        ]
      },{
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [
          { hue: '#83cead' },
          { saturation: 1 },
          { lightness: -15 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'landscape',
        elementType: 'geometry',
        stylers: [
          { hue: '#f3f4f4' },
          { saturation: -84 },
          { lightness: 59 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'landscape',
        elementType: 'labels',
        stylers: [
          { hue: '#ffffff' },
          { saturation: -100 },
          { lightness: 100 },
          { visibility: 'off' }
        ]
      },{
        featureType: 'road',
        elementType: 'geometry',
        stylers: [
          { hue: '#ffffff' },
          { saturation: -100 },
          { lightness: 100 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'road',
        elementType: 'labels',
        stylers: [
          { hue: '#bbbbbb' },
          { saturation: -100 },
          { lightness: 26 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'road.arterial',
        elementType: 'geometry',
        stylers: [
          { hue: '#ffcc00' },
          { saturation: 100 },
          { lightness: -35 },
          { visibility: 'simplified' }
        ]
      },{
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [
          { hue: '#ffcc00' },
          { saturation: 100 },
          { lightness: -22 },
          { visibility: 'on' }
        ]
      },{
        featureType: 'poi.school',
        elementType: 'all',
        stylers: [
          { hue: '#d7e4e4' },
          { saturation: -60 },
          { lightness: 23 },
          { visibility: 'on' }
        ]
      }
    ]
    ,
  }
  var mapElement = document.getElementById('mapa');
  var map = new google.maps.Map(mapElement, mapOptions);
  var locations = [
    ['Evropské příležitosti regionu 2014', 'Aula VŠB-TUO<br />17. listopadu 15/2172<br />Ostrava', 'undefined', 'konference@dobra-rada.cz', 'konference.dobra-rada.cz', 49.8307856, 18.162868, '/assets/img/solid-pin-darkblue.png']
  ];
  for (i = 0; i < locations.length; i++) {
    if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
    if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
    if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
    if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
    if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
    marker = new google.maps.Marker({
      icon: markericon,
      position: new google.maps.LatLng(locations[i][5], locations[i][6]),
      map: map,
      title: locations[i][0],
      desc: description,
      tel: telephone,
      email: email,
      web: web
    });
    bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web);
  }
  function bindInfoWindow(marker, map, title, desc, telephone, email, web) {
    if (web.substring(0, 7) != "http://") {
      link = "http://" + web;
    } else {
      link = web;
    }
    var infoWindowVisible = (function () {
      var currentlyVisible = false;
      return function (visible) {
        if (visible !== undefined) {
          currentlyVisible = visible;
        }
        return currentlyVisible;
      };
    }());
    iw = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {
      if (infoWindowVisible()) {
        iw.close();
        infoWindowVisible(false);
      } else {
        var html= "<div style='color:#000;background-color:#fff;padding:5px;width:260px;'><h3>"+title+"</h3><p>"+desc+"<p><a href='mailto:"+email+"' >"+email+"<a><a href='"+link+"'' >"+web+"<a></div>";
        iw = new google.maps.InfoWindow({content:html});
        iw.open(map,marker);
        infoWindowVisible(true);
      }
    });
    google.maps.event.addListener(iw, 'closeclick', function () {
      infoWindowVisible(false);
    });
  }
}
