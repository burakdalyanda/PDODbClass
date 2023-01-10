<?php
namespace PDOphc;

use PDO;
use PDOException;
use Exception;

class DB
{

	// PDO instance
	public $pdo = null;

	// Select statement
	protected $select 	= '*';

	// Table name
	protected $table	= null;

	// Where statement
	protected $where	= null;

	// Limit statement
	protected $limit	= null;

	// Join statement
	protected $join		= null;

	// Order By statement
	protected $orderBy	= null;

	// Group By statement
	protected $groupBy	= null;

	// Having statement
	protected $having	= null;

	// Last instert id
	protected $insertId	= null;

	// Custom query
	protected $custom 	= null;

	// SQL Statement
	protected $sql		= null;

	// Table prefix
	protected $prefix	= null;

	// Error
	protected $error	= null;

	// Number of total rows
	protected $numRows	= 0;

	// Group flag for where and having statements
	protected $grouped 	= 0;

	// Instance
	private static $instance;

	// Getting instance
	public static function init($config = [])
	{
		if (null === static::$instance) {
			static::$instance = new static($config);
		}

		return self::$instance;
	}

	/**
	 * Initializing
	 *
	 * @param array $config
	 * @return object
	 */
	public function __construct($config = [])
	{
	}

}