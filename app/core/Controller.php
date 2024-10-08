<?php

/**
 * Main Controller trait
 */
trait Controller
{
	use Session;
	
	/**
	 * view
	 *
	 * @param  mixed $name
	 * @param  mixed $data
	 * @return void
	 */
	public function view($name, $data = [])
	{
		if (!empty($data))
			extract($data);

		$filename = "../app/views/" . $name . ".view.php";
		if (file_exists($filename)) {
			require $filename;
		} else {

			$filename = "../app/views/404_file.view.php";
			require $filename;
		}
	}
}
