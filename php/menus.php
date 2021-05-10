<?php 

    //menus

		if (isset($_SESSION['idrolusuario1L1'])) {
		?>
		<ul id="perfil">
			<li class="items"><a href="#" class="perfil-foto">
				<?php 
				if (isset($_SESSION['urlIM5'])) {
					echo "<img width=\"40\" height=\"40\"  src=\"uploads/".$_SESSION['urlIM5']."\" alt=\"\">";
				}
				

			?>
			<?php echo $_SESSION['nombreL1']; ?></a>
				<ul>
					<li><a href="perfil.php">Perfil</a></li>
					<li><a href="sclose.php">Cerrar Session</a></li>
				</ul>
			</li>
		</ul>
		<?php 
    		
    
        if ($_SESSION['idrolusuario1L1']==1) {
			?>
				<ul id="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="#">#</a></li>
					<li><a href="#">#</a></li>
				</ul>
			<?php 
			}

			elseif ($_SESSION['idrolusuario1L1']==2) {
			?>
				<ul id="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="#">#</a></li>
					<li><a href="#">#</a></li>
					<li class="items"><a href="#">Acciones</a>
						<ul>
					
							<li><a href="registrarcortes.php">Registrar Corte</a></li>
						</ul>
					</li>
                    <?php
                    
                    $peticion55 = "SELECT * FROM usuario WHERE idusuario =".$_SESSION['idusuarioL1']." LIMIT 1";
	                $respuesta55 = mysqli_query($conn, $peticion55);
	                while ($fila55 = $respuesta55->fetch_array()) {
					    if($fila55['idpagina3']==0 || $fila55['idpagina3']==1 ){
						    echo "<li><a href=\"registrarbarberia.php\">crear salon</a></li>"; 
					    }else{
						
						    echo "<li><a href=\"salon.php?salon=".$fila55['idpagina3']."\">Barberia</a></li>";
					    }
                    }
					?>
				</ul>	
			<?php 
            }else{

            }
        }
	?>