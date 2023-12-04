<?php
class client
{
    private ?int $id = null;
    private ?string $user_name = null;
    private ?string $password = null;
    private ?string $email = null;
    
    public function __construct($u = null, $n, $l, $o, $d, $i)
    {
        $this->id = $i;
        $this->user_name = $u;
        $this->password= $p;
        $this->email = $e;
      
    }


    public function getID()
    {
        return $this->id;
    }


    public function getuser()
    {
        return $this->user_name;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function getemail()
    {
        return $this->email;
    }
    


    public function setID($i)
    {
        return $this->id = $i;
    }
    public function setuser($u)
    {
        return $this->user_name = $u;
    }
    public function setpassword($p)
    {
        return $this->password = $p;
    }
    public function setemail($e)
    {
        return $this->email = $e;
    }
  
}