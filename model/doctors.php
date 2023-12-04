<?php
class doctor
{
    private ?int $id = null;
    private ?string $firstname = null;
    private ?string $lastname = null;
    private ?string $email = null;
    private ?string $password = null;

    public function __construct($i , $f, $l, $e, $p)
    {
        $this->id = $i;
        $this->firstname = $f;
        $this->lastname = $l;
        $this->email= $e;
        $this->password = $p;
    }


    public function getID()
    {
        return $this->id;
    }


    public function getFname()
    {
        return $this->firstname;
    }
    public function getLname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    


    public function setID($i)
    {
        return $this->id = $i;
    }
    public function setFname($f)
    {
        return $this->firstname = $f;
    }
    public function setLname($l)
    {
        return $this->date_event = $l;
    }
    public function setEmail($e)
    {
        return $this->email = $e;
    }
    public function setPassword($p)
    {
        return $this->password = $p;
    }
}