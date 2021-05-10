
<?php 
	require "php/cabecera.php";
 ?>
<form id="registroFecha" method="post" a>
<h2>REGISTRAR HORARIO</h2>
    <div>
    <label for="">Dia</label>
    <input type="date" name="diaN">
    </div>
    <div>
    <label for="">Hora</label>
    <input type="time" name="horaN">
    </div>
    <div>
    <button type="submit" id="btnregistroFecha">Registrar Horarios</button>
    </div>
</form>
<?php
    require "php/footer.php";
?>