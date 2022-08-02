
 <?php
class databaseClass {
    var $conn;
    var $db;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        $this->db = mysql_select_db(DB_NAME, $this->conn);
    }

    public function disconnect() {
        mysql_close($this->conn);
    }

    public function reconnect() {
        $this->disconnect();
        $this->connect();
    }

    public function queryCompanyExist($company) {
        //auto reconnect if MySQL server has gone away
        if (!mysql_ping($this->conn)) $this->reconnect();

        $query =  "SELECT name FROM company WHERE name='$company'";
        $result = mysql_query($query);
        if (!$result) print mysql_error() . "\r\n";
        return mysql_fetch_assoc($result);
    }
}
  
?>
