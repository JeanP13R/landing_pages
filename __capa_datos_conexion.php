<?php 
//███ SQL █████████████████████████████████████████████████████████████
function _sqlcon($query){
	$sqlhost='.\SQLEXPRESS';
	$sqluser='sa';
	$sqlpassword='sistem@5';
	$sqldatabase='BD_MAESTRO_ALFA';
	$db = new COM('ADODB.Connection', NULL, CP_UTF8);  // Agregar al PHP.INI "extension=php_com_dotnet.dll"
	$dsn = 'DRIVER={Sql Server}; SERVER={'.$host.'};UID={'.$user.'};PWD={'.$password.'}; DATABASE={'.$database.'}';
	$db->Open($dsn); 
	return $rs = $db->Execute($query);
}
//███ MYSQL ███████████████████████████████████████████████████████████
function _mysql($consulta){		
	/*echo "<br>";
	echo $consulta;
	echo "<br>";*/
	$mysqlhost='192.185.122.63';
	$mysqluser='ab6849_launcher';
	$mysqlpassword='K5351945s';
	$mysqldatabase='ab6849_launcher';
	$conn = mysqli_connect($mysqlhost, $mysqluser, $mysqlpassword, $mysqldatabase);
	if (!$conn) {
		die("Conexión fallida: " . mysqli_connect_error());
	}
	if((strpos($consulta, "select")===0)){
		$result = mysqli_query($conn, $consulta);
		$json_result = array();
		if (mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$json_result[] = $row;
			}
		} else {
			return null;
		}	
		mysqli_close($conn);
		$json_codificado=json_encode($json_result);
		$json_decodificado=json_decode($json_codificado);
		return $json_decodificado;
	} else {
		$result = mysqli_query($conn, $consulta);
		mysqli_close($conn);
		return;
	}
}
