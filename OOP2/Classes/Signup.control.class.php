<?php
class Register extends Dbh
{
    private $fName;
    private $sName;
    private $mobileNO;
    private $emailAdress;
    private $ePassword;
    private $cPassword;

    public function __construct($fName, $sName, $mobileNo, $emailAdress, $ePassword, $cPassword)
    {
        $this->fName = $fName;
        $this->sName = $sName;
        $this->mobileNO = $mobileNo;
        $this->emailAdress = $emailAdress;
        $this->ePassword = $ePassword;
        $this->cPassword = $cPassword;
    }
    private function insertUser(){

        $query = "INSERT INTO users (fName,sName, mobileNO, emailAdress, ePassword, cPassword) VALUES 
        (:fName, :sName, :mobileNO, :emailAdress, :ePassword, :cPassword);";
        $stm = parent::connect()->prepare($query);
        $stm->bindparam(":fName", $this->fName);
        $stm->bindparam(":sName", $this->sName);
        $stm->bindparam(":mobileNO", $this->mobileNO);
        $stm->bindparam(":emailAdress", $this->emailAdress);
        $stm->bindparam(":ePassword",  $this->ePassword);
        $stm->bindparam(":cPassword", $this->cPassword);
        $stm->execute();
    }
    public function setfName($fName)
    {

        $this->fName = $fName;
    }
    public function setsName($sName)
    {
        $this->sName = $sName;
    }
    public function setmobileNO($mobileNO)
    {

        $this->mobileNO = $mobileNO;
    }
    public function setemailAdress($emailAdress)
    {

        $this->emailAdress = $emailAdress;
    }
    public function setePassword($ePassword)
    {

        $this->ePassword = $ePassword;
    }
    public function setcPassword($cPassword)
    {

        $this->cPassword = $cPassword;
    }

    public function getfName()
    {
        return $this->fName;
    }

    public function getsName()
    {
        return $this->sName;
    }
    public function getmobileNO()
    {
        return $this->mobileNO;
    }
    public function getemailAdress()
    {
        return $this->emailAdress;
    }
    public function getePassword()
    {
        return $this->ePassword;
    }
    public function getcPassword()
    {
        return $this->cPassword;
    }

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            

        }
    }
}
