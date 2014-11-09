<?php
 
class database {
 
    var $SQL;
    var $lastquery;
    var $count=0;

	function database($database, $server='localhost', $username='serahana_db', $password='@urc1@8bmf%_'){
        $this->SQL = mysql_connect($server, $username, $password) or die('Error: '.mysql_error());
		if (DEVELOPMENT_MODE) {
			$this->SQL = mysql_connect($server, $username, $password) or die('Error: '.mysql_error());
		}
		if (PRODUCTION_MODE) {
			$this->SQL = mysql_connect($server, $username, $password) or die('Sorry, but our Server/Database is under maintenance now. Please try again later.');
		}
        mysql_select_db($database, $this->SQL);
		mysql_set_charset('utf8');
    }
 
    function query($query, $return='true'){
        $this->lastquery = $query;
        $this->count++;
		if (DEVELOPMENT_MODE) {
			$result = mysql_query($query, $this->SQL) or die('There was a database error!<br />' . mysql_error() . '<br /><br />The query was: ' . htmlentities($query));
		}
		if (PRODUCTION_MODE) {
			$result = mysql_query($query, $this->SQL) or die('Sorry, but our Server/Database is under maintenance now. Please try again later.');
		}
        if ($return)
            return $result;
    }
 
    function num_rows(&$result){
        return @mysql_num_rows($result);
    }
 
    function fetch_array(&$result){
        return @mysql_fetch_array($result);
    }
 
    function fetch_assoc(&$result){
        return @mysql_fetch_assoc($result);
    }
 
    function insert_id(){
        return @mysql_insert_id();
    }
 
    function disconnect(){
        mysql_close($this->SQL);
    }
 
    function escape(&$string){
        return mysql_real_escape_string($string);
    }
 
    function result($query, $column, $id=0){
        return mysql_result($query, $id, $column);
    }
}
?>