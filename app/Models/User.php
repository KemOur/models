<?php

namespace App\Models;
use Carbon\Carbon;
use DateTime;

class User
{
    protected $id;
    protected $createdat;
    protected $updatedat;
    protected $fullname;
    protected $email;
    protected $password;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of createdat
     *
     */
    public function getCreated()
    {

        if (!$this->createdat instanceof DateTime) {
            return new DateTime();
        }

        return $this->createdat;
    }

    /**
     * Set the value of complete
     *
     * @return  self
     */
    public function setCreated($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get the value of updatedat
     */
    public function getUpdated()
    {
        return Carbon::parse($this->updated_at, 'Europe/Paris')->locale('fr_FR')->diffForHumans();
    }

    /**
     * Set the value of updatedat
     *
     * @return  self
     */
    public function setUpdated($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getFullName(){

        $first_name = $this->first_name;
        $last_name = $this->last_name;

        return $first_name.' '.$last_name;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */

    /**
     * Get the value of persons
     */
    public function getLastname()
    {
        return $this->lastname;

    }

    /**
     * Set the value of persons
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of preparation
     */
    public function getEmail()
    {
        return $this->email;

    }

    /**
     * Set the value of preparation
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;

    }

    /**
     * Set the value of preparation
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}