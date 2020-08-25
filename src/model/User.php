<?php

namespace App\src\model;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $createdAt;


    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $pseudo
     */
    public function setFirstName($firstName)
    {
        $this->pseudo = $firstName;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $pseudo
     */
    public function setLastName($lastName)
    {
        $this->pseudo = $lastName;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $pseudo
     */
    public function setEmail($email)
    {
        $this->pseudo = $email;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**********************************************************************/
    /*User ID Managamenent*************************************************/
    /**********************************************************************/

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
