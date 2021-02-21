<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\PublicModel
{
  /**
   * Get all the users as an associative array
   *
   * @return array
   */
  public static function getAll()
  {
    $pdo = static::getDB();
    $stmt = $pdo->query('SELECT id, name FROM users');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
