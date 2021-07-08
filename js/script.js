$('.navbar-toggler').on('click', function(){
    $('#navbarTogglerDemo03').toggle("change");
    
  }
);

// ver password
function verpassword(){
    var tipo = document.getElementById("password");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
  }


// ciudades
// select

  // funcion para Cargar Provincias al campo <select>
  function cargar_provincias() {
    var array = ["Caracas", "Maracaibo", "Valencia", "Barquisimeto", "Maracay", "Ciudad Guayana", "Barcelona",	"San Cristóbal",
    "Maturín", "Barinas", "Ciudad Bolívar", "Cumaná", "Mérida", "Valera", "Cabimas", "Santa Teresa del Tuy", "Punto Fijo",
    "Acarigua",  "Los Teques", "Coro", "Guanare", "Ciudad Ojeda", "Puerto Cabello",	"Guarenas", "Puerto La Cruz", "Guatire", 
    "Turmero", "Tocuyito", "El Tigre"," Carora"," La Victoria"," Cabudare", "Carúpano", "San Fernando de Apure", "Guacara",
    "El Tocuyo", "Los Guayos", "Santa Rita", "Güigüe"	, "Anaco", "San Juan de Los Morros", "Quibor", "El Vigía", "Palo Negro",
    "San Felipe", "San Carlos", "Mariara", "Villa de Cura", "Ocumare del Tuy", "Yaritagua", "Cúa", "Araure", "Calabozo", 
    "Táriba", "Guasdualito", "Puerto Ayacucho", "Machiques", "Cagua", "Porlamar", "Charallave", "La Asunción",
    "Valle de la Pascua", "Santa Lucía", "Trujillo", "El Valle del Espiritu Santo",	"Tinaquillo", "Puerto Píritu", "El Limón",
    "Socopó", "Boconó", "Punta de Mata", "Ejido", "Upata", "Rubio", "Caja Seca", "Catia La Mar", "Tumeremo", "Cantaura", "La Grita", 
    "Santa Bárbara del Zulia", "Tucupita", "San José de Guanipa", "Chivacoa", "Lechería", "Zaraza", "Nirgua", "Siquisique", 
    "Santa Rita", "Guanta", "Morón", "Pariaguán", "San Juan de Colón", "San Joaquín", "San Antonio de los Altos", 
    "Caicara del Orinoco", "Achaguas", "Biruaca", "Pampatar", "La Guaira", "Maiquetía"]
     // Ordena el Array Alfabeticamente, es muy facil ;)):
    array.sort();
     addOptions("city", array);
   
    // Rutina para agregar opciones a un <select>
   function addOptions(domElement, array) {
    var select = document.getElementsByName(domElement)[0];
     for (value in array) {
     var option = document.createElement("option");
     option.text = array[value];
     select.add(option);
    }
   }}

//    modo oscuro
// refres auto
// } 
$( "#change" ).on("click", function() { 
    if( $( "body" ).hasClass( "dark" )) { 
        $( "body" ).removeClass( "dark" );
        $( ".change" ).text( "OFF" ); 
    } else { 
        $( "body" ).addClass( "dark" ); 
        $( ".change" ).text( "ON" ); 
   } 
    
  if( $( "header" ).hasClass( "dark" )) { 
      $( "header" ).removeClass( "dark" ); 
      $( ".change" ).text( "OFF" ); 
  } else { 

    $( "header" ).addClass( "dark" ); 
      $( ".change" ).text( "ON" ); 
  } 
  
   localStorage.setItem('theme', 'dark');
     
  }); 
  $(function() {
    var theme = localStorage.getItem('theme');  
   if(theme !== ''){      
        $('body').addClass(theme);
        $('header').addClass(theme); 
        $('.dropdown-menu').addClass(theme);
        $('footer').addClass(theme);
  }
      
});


$(document).ready(function(){
 
    $('.ir-arriba',).click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
    });
   
    $(window).scroll(function(){
      if( $(this).scrollTop() > 0 ){
        $('.ir-arriba').slideDown(300);
      } else {
        $('.ir-arriba').slideUp(300);
      }
    });
   
  });
  


// // visitante
window.onload = function()
{
  
  var caution = false
  function setCookie(name, value, expires, path, domain, secure) {
        var curCookie = name + "=" + escape(value) +
                ((expires) ? "; expires=" + expires.toGMTString() : "") +
                ((path) ? "; path=" + path : "") +
                ((domain) ? "; domain=" + domain : "") +
                ((secure) ? "; secure" : "")
        if (!caution || (name + "=" + escape(value)).length <= 4000)
                document.cookie = curCookie
        else
                if (confirm("La cookie no puede pesar mas de 4kb!"))
                        document.cookie = curCookie
}
function getCookie(name) {
        var prefix = name + "="
        var cookieStartIndex = document.cookie.indexOf(prefix)
        if (cookieStartIndex == -1)
                return null
        var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length)
        if (cookieEndIndex == -1)
                cookieEndIndex = document.cookie.length
        return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex))
}
function deleteCookie(name, path, domain) {
        if (getCookie(name)) {
                document.cookie = name + "=" +
                ((path) ? "; path=" + path : "") +
                ((domain) ? "; domain=" + domain : "") +
                "; expires=Thu, 01-Jan-70 00:00:01 GMT"
        }
}
function fixDate(date) {
        var base = new Date(0)
        var skew = base.getTime()
        if (skew > 0)
                date.setTime(date.getTime() - skew)
}
var now = new Date()
fixDate(now)
now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000)
var visits = getCookie("counter")
if (!visits)
        visits = 1
else
        visits = parseInt(visits) + 1
setCookie("counter", visits, now)
// document.write("Esta es tu visita numero: " + visits)
document.getElementById("visita").innerHTML += "Visitas: "+ visits;
}

const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');
const auto = true;
const intervalTime = 4000;
let slideInterval;

const nextSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for next slide
  if(current.nextElementSibling) {
    // Add current to next sibling
    current.nextElementSibling.classList.add('current');
  } else {
    // Add current to start
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
}

const prevSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for previous slide
  if(current.previousElementSibling) {
    // Add current to prev sibling
    current.previousElementSibling.classList.add('current');
  } else {
    // Add current to last
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
}

// Button events
next.addEventListener('click', e => {
  nextSlide();
  if(auto){
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

prev.addEventListener('click', e => {
  prevSlide();
  if(auto){
    clearInterval(slideInterval);
    slideInterval = setInterval(prev, intervalTime);
  }
});

// Auto slide
if(auto) {
  // Run next slide at interval time
  slideInterval = setInterval(nextSlide, intervalTime);
}