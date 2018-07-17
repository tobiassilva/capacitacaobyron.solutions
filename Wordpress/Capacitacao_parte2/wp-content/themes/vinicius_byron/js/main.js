window.onload = function () {
    document.getElementById("nav-button").addEventListener("click", navMenu);
    carousel();
    initMap();  
}

function navMenu() {
    var menu = document.getElementById("main-menu").style.display;
    if (menu !== "none") {
        document.getElementById("main-menu").style.display = "none";
    } else {
        document.getElementById("main-menu").style.display = "block";
    }
}


var indexImg = 0;

function carousel() {
    var i;
    var img = document.getElementsByClassName("gallery-icon");
    for (i = 0; i < img.length; i++) {
        img[i].style.display = "none";
    }
    indexImg++;
    if (indexImg >= img.length) {
        indexImg = 0;
    }
    img[indexImg].style.display = "block";
    setTimeout(carousel, options.velocidade);
}

function prevImg() {
    var img = document.getElementsByClassName("gallery-icon");
    img[indexImg].style.display = "none";
    indexImg--;
    if(indexImg == -1) {
        indexImg = img.length - 1;
    }
    img[indexImg].style.display = "block";
}

function nextImg() {
    var img = document.getElementsByClassName("gallery-icon");
    img[indexImg].style.display = "none";
    indexImg++;
    if(indexImg == img.length) {
        indexImg = 0;
    }
    img[indexImg].style.display = "block";
}

function initMap() {
    var latLng = {
        lat: parseFloat(options.latitude),
        lng: parseFloat(options.longitude)
    };
    map = new google.maps.Map(document.getElementById('map'), {
        center: latLng,
        zoom: parseInt(options.zoom)
    });

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'byron.solutions'
    });
}
/*
function initMap() {
    var myLatLng = {lat: -22.4136042, lng: -45.4515125};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'byron.solutions'
    });
}
*/