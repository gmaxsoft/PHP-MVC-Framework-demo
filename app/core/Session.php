<?php

/**
 * Main Session trait
 */
trait Session
{
	protected $session_name;
	protected $cookie;

	public function __construct()
	{
		/* Setup Session && PHP Settings */
		date_default_timezone_set(TIMEZONE);
		ini_set('session.cookie_lifetime', COOKIE_EXPIRE);
		ini_set('session.gc_maxlifetime', GC_MAXLIFETIME);
		ini_set('session.use_cookies', 1);
		ini_set('session.use_only_cookies', 1);

		$this->session_name = SESSION_NAME;

		/* Start Session */
		$this->start_session();
		
		$this->cookie = [
			'lifetime' => GC_MAXLIFETIME,
			'path'     => COOKIE_PATH,
			'domain'   => ini_get('session.cookie_domain'),
			'secure'   => isset($_SERVER['HTTPS']),
			'httponly' => true
		];

		header("Cache-control: private");
		header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', false);
		header('Pragma: no-cache');
	}

	public function start_session()
	{
		if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		return false;
	}

	public function refresh_session()
	{
		return session_regenerate_id(true);
	}
}