<?php
/**
 * Class Connexio
 */
class Connexio
{

    private $connexio;
	private static $conn;
 
    /**
     * Connection constructor.
     */
    private function __construct()
    {
		$path = 'sqlite:'.$_SERVER['DOCUMENT_ROOT'].'/db/blog.db';
		try
		{
			$this->connexio = new PDO($path); 
		}
		catch(PDOException $e) 
		{
			// Print PDOException message
			echo $e->getMessage();
		}
        
    }
 
    /**
     * Funciona com un pseudo-singleton
     * @return retornem el objecte PDO
     */
    public static function getInstance()
    {
      if (  !self::$conn instanceof self)
      {
         self::$conn = new self;
      }
      return self::$conn;
    }
	
	public function getConnexio()
	{
		return $this->connexio;
	}
 
}