<html>
	<?php 
		class Palabras {	

		function __construct()
		{

		}


	public static function leer()
	{	$List_txt=array();
		$texto=array();

				$MiArchivotxt=fopen("MisArchivos\palabras.txt","r");
		while (!(feof($MiArchivotxt)))
			{
				$linea=fgets($MiArchivotxt);
				if($linea!="" && $linea!="\n")
				{
				$texto=explode(" ",$linea);

				$List_txt[]=$texto;
				}


			}
			return $List_txt;

	}

	public static function ArmarTablaPalabras()
	{
		$Listado=array();
		$Listado=Palabras::Leer();
			$uno=0;$dos=0;$tres=0;$cuatro=0;$mascuatro=0;$tamaño=0;
				
				foreach ($Listado as $Palabras )
				 { 
				 	foreach ($Palabras as $letras) {
				 		# code...
				 	
				 	$tamaño=strlen($letras);
			
					switch ($tamaño)
					 {
							case '1':
							{
							$uno+=1;
							break;
							}
							case '2':
							{
							$dos+=1;
							break;
							}
							case '3':
							{
							$tres+=1;
							break;
							}
							case '4':
							{
							$cuatro+=1;
							break;
							}															
						
							default:
							{
							$mascuatro+=1;
							break;
							}
						}
					}
				}

				Palabras::MostrarTexto($Listado);
	
	?>		

		<table border=1>
				<tr>
					<th>1 Letra</th>
					<th>2 Letras</th>
					<th>3 Letras</th>
					<th>4 Letras</th>
					<th>Mas de Cuatro</th>
				</tr>
				<tr>
					<th><?php echo $uno ?></th>
					<th><?php echo $dos ?></th>
					<th><?php echo $tres ?></th>
					<th><?php echo $cuatro ?></th>
					<th><?php echo $mascuatro ?></th>
				</tr>

		</table>

		

	<?php
		
		}

		public static function MostrarTexto($Listado)
		{
			echo "El Texto ingresado es: <br>";
			foreach ($Listado as $Renglon) {
				foreach ($Renglon as $palabra ) {
					echo $palabra. " ";
				}
				echo"<br>";
			}



		}


	}


?>
</html>