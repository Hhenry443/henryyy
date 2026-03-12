<?php

class Dbh
{

  private static $db;
  private $connection;

  private function __construct()
  {
    $envPath = '/var/www/vhosts/henryyy.com/.env';

    if (file_exists($envPath)) {
      foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        [$key, $value] = explode('=', $line, 2);
        $_ENV[$key] = trim($value);
      }

      $this->connection = new PDO(
        'mysql:host=' . $_ENV['DB_HOST'] . '; dbname=' . $_ENV['DB_NAME'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASSWD']
      );
    } else {
      $this->connection = new PDO(
        'mysql:host=' . getenv('DB_HOST') . '; dbname=' . getenv('DB_NAME'),
        getenv('DB_USER'),
        getenv('DB_PASSWD')
      );
    }


    $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }

  function __destruct()
  {
    //$this->connection->close();
  }

  public static function getConnection()
  {
    if (self::$db == null) {
      if (getenv('NODE') == 'localhost') {
        //error_log('DB Connected');
      }
      self::$db = new Dbh();
    }
    return self::$db->connection;
  }
}
