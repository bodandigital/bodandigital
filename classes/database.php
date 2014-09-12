<?php

/**********************************************
 *  database class aasumes you have done
 *  sanitization bevore running any SQL
 **********************************************/

class database{
    protected $_link,$_result,$_numRows;
    
    public function __construct($server,$username,$password,$db) {
        $this->_link = mysql_connect($server,$username,$password);
        mysql_select_db($db,$this->_link);
    }
    
    public function disconnect(){
        mysql_close($this->_link);
    }
    
    public function query($sql){
        $this-> _result = mysql_query($sql,$his->_link);
        $this-> _numRows = mysql_num_rows($his->_result);
    }
    
    public function numRows(){
        return $this->_numRows;
    }
    
    public function rows(){
        $rows = array ();
        
        for ($x=0; $x<$this-> numRows(); $x++){
            $rows[] = mysql_fetch_assoc($this->_result);
        }
        return $rows;
    }
}
?>
