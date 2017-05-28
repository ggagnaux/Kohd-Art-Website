/*
    File: custom.js
    Description: Javascript methods for Kohd & Art website
    Author: Kohd and Art (G. Gagnaux)
    Date: March 10, 2016
    Revision: 1
*/


$(document).ready(function(){
    $("[data-toggle='tooltip']").tooltip();
});

var BuildHeader = function() {
    var content = "";
    $(document).ready(function() {
        content += "                <td style='background-color: #111111; width: 752px; padding-bottom: 5px; border: 1px solid #444444; border-bottom: 1px solid #333333;'>";
        content += "                    <div style='background-color: #000; width: 752px;'>";
        content += "                        <div style='float: left; padding-left: 5px;'>";
        content += "                            <img src='images/logo.png' width='245' height='75'>";
        content += "                        </div>";
        content += "                        <div id='mainmenu' style='float: right; padding-right: 1px; margin-top: 60px; vertical-align: bottom;'>";
        content += "                        </div>";
        content += "                    </div>";
        content += "                </td>";
        $("#headerRow").append(content);
        BuildMainMenu();
    });
};

/*function BuildHeader() {
}*/

var BuildMainMenu = function(containerId, activePage) {
    $(document).ready(function() {
        var i = 0;
        var x = 0;
        var c = "<ul class=\"nav navbar-nav navbar-right\">";

        var type = "";
        var label = "";
        var name = "";
        var url = "";
        var items = "";
        for (i=0; i<g_menuItems.length; i+=1) {
            type = g_menuItems[i].type;
            label = g_menuItems[i].label;
            name = g_menuItems[i].name;

            if (type == "pagelink") {
                url = g_menuItems[i].url;
                if (activePage == name) { c += "<li class=\"active\"><a class=\"\" href=\"" + url + "\">" + label + "</a></li>"; }
                else { c += "<li><a class=\"\" href=\"" + url + "\">" + label + "</a></li>"; }
            }
            else if (type == "submenu") {

                c += "<li class=\"dropdown\">";
                c += "  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">" + label + " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>";
                c += "  <ul class=\"dropdown-menu\">";


                // Iterate through all submenu items
                items = g_menuItems[i].items;

                for (x=0; x<items.length; x+=1) {
                    label = items[x].label;
                    url = items[x].url;
                    c += "<li><a target=\"_new\" href=\"" + url + "\">" + label + "&nbsp;<i class=\"fa fa-external-link\"></i></a></li>";
                }

                c += "</ul>";
                c += "</li>";
            }
        }

        c += "</ul>";

        $(containerId).append(c);

        /*
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown Menu 1</a></li>
                <li><a href="#">Dropdown Menu 2</a></li>
                <li><a href="#">Dropdown Menu 3</a></li>
                <li><a href="#">Dropdown Menu 4</a></li>
                <li><a href="#">Dropdown Menu 5</a></li>
                <li class="divider"></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
        </li>
        <li><a href="blog.html">Blog</a></li>
        */
    });
};


var BuildFooter = function(containerId) {

    $(document).ready(function() {

        var c = "<div class='container'>";
        c += "<div class='row'>";
        c += "<div class='col-footer col-md-4 col-xs-6'>";
        c += "<h3>Contact Us</h3>";
        c += "<p class='contact-us-details'>";
        c += "<b>Address:</b> " + g_address + "<br/>";
        c += "<b>Phone:</b> " + g_phone + "<br/>";
        c += "<b>Email:</b> <a href='mailto:" + g_email + "'>" + g_email + "</a>";
        c += "</p>";
        c += "</div>";
        c += "<div class='col-footer col-md-4 col-xs-6'>";
        c += "  <h3>Our Social Networks</h3>";
        c += "  <p>Feel free to connect with us on the following social networks!</p>";
        c += "<div>";

        var i = 0;
        var name = "";
        var icon = "";
        var url = "";
        // Insert social media icons
        for (i = 0; i < g_socialMediaLinks.length; i+=1) {
            name = g_socialMediaLinks[i].name;
            icon = g_socialMediaLinks[i].icon;
            url = g_socialMediaLinks[i].url;
            c += "<a target='_new' href='" + url + "'><img src='" + icon + "' width='32' alt='" + name + "'></a>";
        }

        c += "</div>";
        c += "</div>";
        c += "<div class='col-footer col-md-4 col-xs-6'>";
        c += "<h3>About&nbsp;" + g_companyname + "</h3>";
        c += "<p>" + g_aboutcompany + "</p>";
        c += "</div>";
        c += "</div>";
        c += "<div class='row'>";

        c += "<div class='col-md-6'>";
        c += "<div class='footer-copyright'>" + g_copyright + "</div>";
        c += "</div>";

        c += "<div class='col-md-6'>";
        c += "<div class='footer-copyright'>Website: " + g_version + "</div>";
        c += "</div>";


        c += "</div>";
        c += "</div>";
        $(containerId).append(c);
    });
};

var BuildCarousel = function(containerId) {

    var s = g_SliderSettings;


    $(document).ready(function() {

        //
        // Header portion
        //

        var c = "<div class=\"carousel slide\">";
        c +=    "    <ol class=\"carousel-indicators\">";
        var i = 0;
        for (i = 0; i < s.length; i+=1) {
            if (i === 0) {
                c +=    "<li data-target=\"" + containerId + "\" data-slide-to=\"" + i + "\" class=\"active\"></li>";
            } else {
                c +=    "<li data-target=\"" + containerId + "\" data-slide-to=\"" + i + "\"></li>";
            }
        }
        c +=    "    </ol>";
        c +=    "    <div class=\"carousel-inner\" role=\"listbox\">";

        //
        // Items
        //
        for (i = 0; i < s.length; i+=1) {
            var heading = s[i].heading;
            var content = s[i].content;
            var displaybutton = s[i].displaybutton;
            var buttontext = s[i].buttontext;
            var buttonlink = s[i].buttonlink;
            var backgroundimage = s[i].backgroundimage;

            c += "<div class='item";
            c += (i === 0) ? " active'" : "'";
            c += " style='background-image: url(" + backgroundimage + ")'>";
            c += "    <div class='container'>";
            c += "       <div class='row'>";
            c += "          <div class='col-sm-12'>";
            c += "              <div class='carousel-content center centered'>";
            c += "                  <h2 class='animation animated-item-1'>" + heading + "</h2>";
            c += "                     <p class='animation animated-item-2'>" + content + "</p>";

            if (displaybutton) {
                c += "                          <br>";
                c += "                          <a class='btn btn-md animation animated-item-3' href='" + buttonlink + "'>" + buttontext + "</a>";
            }
            c += "                              </div>";
            c += "                           </div>";
            c += "                       </div>";
            c += "                 </div>";
            c += "</div>";
        }

        //
        // Footer Portion
        //
        c += "</div><!--/.carousel-inner-->";
        c += "</div><!--/.carousel-->";
        c += "<a class='prev hidden-xs' href='" + containerId + "' data-slide='prev'>";
        c += "    <i class='fa fa-angle-left'></i>";
        c += "</a>";
        c += "<a class='next hidden-xs' href='" + containerId + "' data-slide='next'>";
        c += "    <i class='fa fa-angle-right'></i>";
        c += "</a>";
        c += "</section><!--/#main-slider-->";

        $(containerId).append(c);
    });
};

var GetUrlVars = function() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
    function(m, key, value) {
        vars[key] = value;
    });
    return vars;
};

// Vancouver, BC
var locationlat = 49.261061;
var locationLong = -123.14280889999998;


// Google Maps Scripts
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, "load", init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 13,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(locationlat, locationLong),

        // Disables the default Google Maps UI components
        disableDefaultUI: true,
        scrollwheel: true,
        draggable: true,

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        /*
        styles: [{ "featureType": "all", "elementType": "all", "stylers": [{ "hue": "#e7ecf0" }] },
                 { "featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{ "visibility": "on" }, { "color": "#021622" }] },
                 { "featureType": "administrative.province", "elementType": "all", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "administrative.province", "elementType": "labels.text", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "administrative.locality", "elementType": "all", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "landscape.natural", "elementType": "all", "stylers": [{ "visibility": "simplified" }] },
                 { "featureType": "landscape.natural.landcover", "elementType": "all", "stylers": [{ "visibility": "on" }] },
                 { "featureType": "landscape.natural.terrain", "elementType": "all", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "landscape.natural.terrain", "elementType": "geometry", "stylers": [{ "visibility": "on" }] },
                 { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": -10 }] },
                 { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }] },
                 { "featureType": "water", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -10 }] }]
        */

        /*
        // Light Theme
        styles: [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "visibility": "on" }, { "lightness": 33 }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "color": "#f2e5d4" }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#c5dac6" }] }, { "featureType": "poi.park", "elementType": "labels", "stylers": [{ "visibility": "on" }, { "lightness": 20 }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [{ "color": "#c5c6c6" }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#e4d7c6" }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#fbfaf7" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "visibility": "on" }, { "color": "#acbcc9" }] }]
        */

        // Monochrome Theme
        styles: [{"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]}]        


    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById("contact-us-map");

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
    var image = "img/map-marker.png";
    var myLatLng = new google.maps.LatLng(locationlat, locationLong);

    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });
}

