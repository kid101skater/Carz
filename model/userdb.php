 <?
 class UserDb{
    /**
     *
        CREATE TABLE Users (
       bloggerId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50),
       password VARCHAR(50)
    
    );
    */
    
    
    private $_pdo;
        
        function __construct()
        {
            //Require configuration
            require_once '/home/smoon/config.php';
            
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD);
                
                //keep the connection open for reuse
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

            }
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        
        /**
         * Adds a new user in the DB
         *
         */
        function addUser($username,$password)
        {
            $insert = 'INSERT INTO Users (username,password) VALUES (:username, :password)';
            
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);

           
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }

        
        /**
         * This function gets the info by id. 
         */
        function userById($userId)
        {
            $select = 'SELECT userId, username, password FROM Users WHERE userId=:userId';
    
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':userId', $userId, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * This function looks for the passwed in username and password in the database and returns the row
         * if array returned is empty, then not found 
         */
        function login($username, $password)
        {
            $select = 'SELECT userId, username, password FROM Users WHERE username=:username && password=:password';
             $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_INT);
            $statement->bindValue(':password', $password, PDO::PARAM_INT);
            $statement->execute();
            
         
            return $statement->fetch(PDO::FETCH_ASSOC);
            
        }
        
        
    }
?>