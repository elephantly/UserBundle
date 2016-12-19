<?php

namespace Elephantly\UserBundle\Entity;

/**
 *
 */
class User implements UserInterface
{
    /**
    * id
    *
    * @var string
    */
    protected $id;

    /**
    * username
    *
    * @var string
    */
    protected $username;

    /**
    * email
    *
    * @var string
    */
    protected $email;

    /**
    * salt for password
    *
    * @var string
    */
    protected $salt;

    /**
    * password
    *
    * @var string
    */
    protected $password;

    /**
    * confirmation token
    *
    * @var string
    */
    protected $confirmationToken;

    /**
    * enabled
    *
    * @var boolean
    */
    protected $enabled = 0;

    /**
    * account non expired
    *
    * @var boolean
    */
    protected $accountNonExpired = 0;

    /**
    * credentials non expired
    *
    * @var boolean
    */
    protected $credentialsNonExpired = 0;

    /**
    * account non locked
    *
    * @var boolean
    */
    protected $accountNonLocked = 0;

    /**
    * roles of user
    *
    * @var array
    */
    protected $roles;

    /**
    * date of last update
    *
    * @var \DateTime
    */
    protected $updatedAt;

    /**
    * date of creation
    *
    * @var \DateTime
    */
    protected $createdAt;

    public function __construct()
    {
        $this->roles = array();
        $this->salt = md5(uniqid(null, true));
        $this->confirmationToken = bin2hex(openssl_random_pseudo_bytes(8));
    }

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param string username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of salt for password
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set the value of salt for password
     *
     * @param string salt
     *
     * @return self
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of enabled
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @param boolean enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of account non expired
     *
     * @return boolean
     */
    public function isAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    /**
     * Set the value of account non expired
     *
     * @param boolean accountNonExpired
     *
     * @return self
     */
    public function setAccountNonExpired($accountNonExpired)
    {
        $this->accountNonExpired = $accountNonExpired;

        return $this;
    }

    /**
     * Get the value of credentials non expired
     *
     * @return boolean
     */
    public function isCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }

    /**
     * Set the value of credentials non expired
     *
     * @param boolean credentialsNonExpired
     *
     * @return self
     */
    public function setCredentialsNonExpired($credentialsNonExpired)
    {
        $this->credentialsNonExpired = $credentialsNonExpired;

        return $this;
    }

    /**
     * Get the value of account non locked
     *
     * @return boolean
     */
    public function isAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    /**
     * Set the value of account non locked
     *
     * @param boolean accountNonLocked
     *
     * @return self
     */
    public function setAccountNonLocked($accountNonLocked)
    {
        $this->accountNonLocked = $accountNonLocked;

        return $this;
    }

    /**
     * Get the value of roles of user
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set the value of roles of user
     *
     * @param array roles
     *
     * @return self
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get the value of date of last update
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of date of last update
     *
     * @param \DateTime updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of date of creation
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of date of creation
     *
     * @param \DateTime createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }


    /**
     * Get the value of confirmation token
     *
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set the value of confirmation token
     *
     * @param string confirmationToken
     *
     * @return self
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    public function eraseCredentials()
    {
        return true;
    }

}
