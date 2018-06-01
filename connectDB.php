 <?php
 
	 require_once 'rb-mysql.php';
	 
	 R::setup('mysql:host=127.0.0.1;dbname=RedDB','root', '' ); // подключения к базе данных в RedBeanPHP    
	 
	 if ( !R::testConnection() )
	 {
		exit ('No connection?');
	 }
 
 ?>