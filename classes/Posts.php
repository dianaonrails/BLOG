<?php

/**
 * Class posts
 */
class Posts
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {

    	// create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if (!$this->db_connection->set_charset("utf8")) {

                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {
            	
            	
            }
    }

    public function getPosts(){
		global $result;
		$sql = 'SELECT ID, post_title, post_date FROM posts ORDER BY ID DESC';

        $result = $this->db_connection->query($sql);
        
   
        return $result;
    }

    public function getPost($id){
    	global $result;
		$sql = "SELECT ID, post_title, post_date, post_textarea,post_photos FROM posts WHERE ID=". $id;

        $result = $this->db_connection->query($sql);
        
        return $result;
    }

    public function editPost(){
		
    }

    public function createPost($title,$textarea){
    	$now = new DateTime();

    	$sql = "INSERT INTO posts (post_title, post_textarea, post_date) VALUES ('" . $title ."', '" . $textarea ."', '". $now->format('Y-m-d H:i:s') ."')";

    	$result = $this->db_connection->query($sql);

    }




}