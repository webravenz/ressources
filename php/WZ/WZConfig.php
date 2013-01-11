<?php

/**
 *
 * @author Webravenz
 */
class WZConfig {
  
  public static $DB_HOST, $DB_NAME, $DB_USER, $DB_PASSWORD, $DB_PREFIX;
  public static $DOCROOT;

  public static $CACHE_FOLDER = '';
  
  public static function init() {
    
    self::$DOCROOT = $_SERVER['DOCUMENT_ROOT'];
    
    if($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
      // en local
      self::$DB_HOST = 'localhost';
      self::$DB_NAME = 'exodik';
      self::$DB_USER = 'root';
      self::$DB_PASSWORD = '';
    } else {
      // en ligne
      self::$DB_HOST = 'db734.1and1.fr';
      self::$DB_NAME = 'db343169819';
      self::$DB_USER = 'dbo343169819';
      self::$DB_PASSWORD = '2132588';
    }
    
    self::$DB_PREFIX = 'et_';
    
    self::$CACHE_FOLDER = self::$DOCROOT.'/api/cache/';
  }
  
}

?>