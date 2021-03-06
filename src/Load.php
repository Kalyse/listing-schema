<?php
namespace ListingSchema;
class Load {
    public const URI = 'https://raw.githubusercontent.com/aptenex/listing-schema/master/src/listing.json';
	private static $instance;
	public static function getInstance()
	{
		if (null === static::$instance) {
			static::$instance = new static();
		}
		
		return static::$instance;
	}
	
	public function load($path = null){
		if($path) {
			return file_get_contents($path);
		}
        
        return file_get_contents(__DIR__ . '/listing.json');
    }
	
	protected function __construct()
	{
	}
	

	
}