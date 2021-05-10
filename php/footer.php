 <footer>
 	
 </footer>
	<!--<script type="text/javascript">
		$(document).on('click',function(){

			$("#btnRegistrarU").on('click', function(){

				registrarUsuario();
			});
			
		});
	</script>
	<script>
		$("#btnSubirIMGU").on('click', function(){
			
				subirIMGUsuario();
			
			});
	</script>

-->	


<script type="text/javascript">
$(document).ready(function() {
	//Mostrar cortes
	mostrarCortes();
	
	mostrarListCortes();
	
	$("#btnregistroFecha").click(function(){
		registroFecha();
	});

	
	$("#plan").click(function(){
		registrarCupo();
	})

$("#btncorteRegistro").click(function () {
	registrarCortes();
	location.href = "perfil.php";
});

	$("#btnRegistrarU").click(function () {
		registrarUsuario();
	});
	$("#btnusuarioLogin").click(function () {
		ingresoUsuario();
	});
	
	

	$("#btnSubirIMGU").click(function () {
		subirIMGUsuario();
	});

	$("#btnSubirIMGC").click(function () {
		subirIMGCorte();
		
	});

	$("#btnRegistrarPagina").click(function (){
		registrarPagina();
	});

	function subirIMGUsuario(){
		
		var datos2 = new FormData($("#frmSubirIMGU")[0]);
		$.ajax({
			method:"POST",
			url: "ajax/subiruAjax.php",
			data:datos2,
			contentType:false,
			processData:false,
			beforensend:function() {
				
			},
			success:function(e) {
				
				if (e==1) {
					alert("IMAGEN SUBIDA");
					
				}else{
					
				alert("ERROR AL SUBIR IMAGEN");
				}
			}

		})
		return false;
}


})
</script>
 </body>
 </html>