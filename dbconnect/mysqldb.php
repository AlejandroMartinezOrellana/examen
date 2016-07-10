<?php
final class MySqlCon extends mysqli {
    private static $host_bd = 'localhost';
    private static $user_bd = 'system';
    private static $pass_bd = 'system';
    protected $name_bd = 'scripts';
    
    public function  __construct() {
        parent::__construct(self::$host_bd, self::$user_bd,
                self::$pass_bd, $this->name_bd);
        if ($this->connect_error) {
            die('Connect Error (' . $this->connect_errno . ') '
                    . $this->connect_error);
        }
        $this->set_charset("utf8");
    }	
}
?>