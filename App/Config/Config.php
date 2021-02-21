<?php
/*
 * The config file, where
 * all the database info is kept
 */

namespace App\Config;

class Config
{
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';
    
    /**
     * Is the public side active?
     * True = Active
     * False = Down
     */
    const PUB_ACTIVE = true;
        

    /**
     * The name of the public
     * database
     */
    const PUBLIC_DB_NAME = "recipee";
    

    
    
}