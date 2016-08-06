<?php
/*
 * ContExplore v1.0
 * Database
 * Build 1
 */
class Database {
	public function add_connection() {
		require_once('config.php');
		
		$c = new PDO("mysql:host=".$db_host.";dbname=".$db_name."", "".$db_username."", "".$db_password."");
	}
	
	public function close_connection() {
		$c = null;
	}
}
?>