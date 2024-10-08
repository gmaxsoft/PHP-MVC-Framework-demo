<?php

/**
 * Main Database trait
 */
trait Database
{
		
	/**
	 * connect
	 *
	 * @return void
	 */
	private function connect()
	{
		$con = null;

		try {
			$con = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
			// set the PDO error mode to exception
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully";
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

		return $con;
	}

	/**
	 * query
	 *
	 * @param  mixed $query
	 * @param  mixed $data
	 * @return void
	 */
	public function query($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if ($check) {
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if (is_array($result) && count($result)) {
				return $result;
			}
		}

		return false;
	}

	/**
	 * get_row
	 *
	 * @param  mixed $query
	 * @param  mixed $data
	 * @return void
	 */
	public function get_row($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if ($check) {
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if (is_array($result) && count($result)) {
				return $result[0];
			}
		}

		return false;
	}
}
