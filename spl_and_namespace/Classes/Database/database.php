<?php
namespace Classes\Database;

class Database {
    public $conn;
    public function connect() {
        print __CLASS__ . ' loaded<BR>';
        try {
            $this->conn = mysqli_connect('localhost', 'root', '489329', 'computer');
            if (mysqli_connect_errno()) {
                print 'Connection error: ' . mysqli_connect_error();
            } else {
                print 'Database Loaded<BR>';
            }
        } catch (exception $e) {
            $e->getMessage();
        }
        // echo '<br>' . __CLASS__;
    }
}
