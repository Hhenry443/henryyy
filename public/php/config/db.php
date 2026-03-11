<?php

class Dbh
{

  private static $db;
  private $connection;

  private function __construct()
  {
    $env = file('/var/www/vhosts/henryyy.com/.env');
    var_dump($env);
    exit;

    $envPath = $_SERVER['DOCUMENT_ROOT'] . '/../.env';

    if (file_exists($envPath)) {
      $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

      foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;

        [$key, $value] = explode('=', $line, 2);
        $_ENV[$key] = $value;
      }
    }

    $this->connection = new PDO(
      'mysql:host=' . $_ENV['DB_HOST'] . '; dbname=' . $_ENV['DB_NAME'],
      $_ENV['DB_USER'],
      $_ENV['DB_PASSWD']
    );

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
