<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 10:13
 */

class Bdd
{
    /**
     * @var string
     */
    private $host   = 'localhost';

    /**
     * @var string
     */
    private $dbName = 'onlineResume';

    /**
     * @var string
     */
    private $user   = 'root';

    /**
     * @var string
     */
    private $pswd   = 'root';



    /**
     * @return PDO
     */
    public function  getPdo() :PDO
    {
      return new PDO(
          'mysql:host='.$this->host.';
          dbname='.$this->dbName.';
          charset=utf8',
          $this->user,
          $this->pswd
      );
    }

}
