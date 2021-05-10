/*USUARIO*/
function registrarUsuario(){
	var datos = $("#usuarioRegistro").serialize();
		$.ajax({
			method:"POST",
			url: "ajax/registrareuAjax.php",
			data:datos,
			success:function(e) {
				
				if (e==1) {
					alert("REGISTRADO");
				}else{
					alert("ERROR");
				}
			}

		});
		
}


function ingresoUsuario(){
	var datos = $("#usuarioLogin").serialize();
		$.ajax({
			method:"POST",
			url: "ajax/loginAjax.php",
			data:datos,
			success:function(e) {
				
				if (e==1) {
					
				}else{
					alert("ERROR");
				}
			}

		});
		return false;
}
//CORTES

//CREAR CUPO
function registrarCupo(){
	var datos = $("#plan").serialize();
		$.ajax({
			method:"POST",
			url: "ajax/cupoAjax.php",
			data:datos,
			success:function(e) {
				
				if (e==1) {
					
				}else{
					alert("ERROR");
				}
			}

		});
		return false;
}
//REGISTRAR FECHA
function registroFecha(){
	var datos = $("#registroFecha").serialize();
		$.ajax({
			method:"POST",
			url: "ajax/registrarhAjax.php",
			data:datos,
			success:function(e) {
				
				if (e==1) {
					
				}else{
					alert("ERROR");
				}
			}

		});
		return false;
}



//SLIDER
/*
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

*/

