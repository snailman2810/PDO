<?php
require_once ("database.php");
class m_user extends database
{
    public function insert_user($id,$mail,$name,$password,$phone,$address,$created_at,$updated_at){
        $sql = "insert into users value (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$mail,$name,$password,$phone,$address,$created_at,$updated_at));
    }
    public function select_login($mail,$password){
        $sql = "select * from users where mail = ? and password =?";
        $this->setQuery($sql);
        return $this->loadRow(array($mail,$password));

    }
}
?>