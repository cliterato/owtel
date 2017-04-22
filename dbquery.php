<?php
include_once('dbClass.php');

class dbquery {
    private static $_initialize; //The single instance
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function initialize() {
        if(!self::$_initialize) { // If no instance then make one
            self::$_initialize = new self();
        }
        return self::$_initialize;
    }

	public function query_select($sql_query){

		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$result = $mysqli->query($sql_query);
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);

		mysqli_free_result($result);
		$db->close();

		if(count($row) >  0){
			return $row;
		}

		return null;
	}

	public function get_rates(){
		$sql = "SELECT * FROM ow_rate";
		return $this->query_select($sql);
	}

	public function get_rateByCountryCode($country_code){
		if(!empty($country_code)){
			$sql = "SELECT * FROM ow_rate where country_code = '" . $country_code . "'";
			$_result = $this->query_select($sql);			
			return $_result;
		}else{
			return null;
		}
	}

}