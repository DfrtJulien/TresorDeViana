<?php

namespace App\Models;

use PDO;
use Config\DataBase;

class User
{
    protected ?int $id;
    protected ?string $mail;
    protected ?string $password;
    protected ?string $register_date;
    protected ?string $city;
    protected ?string $postal;
    protected ?string $street;
    protected ?string $firstname;
    protected ?string $lastname;
    protected ?string $phone_number;
    protected int|string|null $id_role;

    public function __construct(?int $id,?string $mail, ?string $password,  ?string $register_date,  ?string $city, ?string $postal,  ?string $street, ?string $firstname, ?string $lastname, ?string $pseudo, ?string $phone_number, int|string|null $id_role)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->password = $password;
        $this->register_date = $register_date;
        $this->city = $city;
        $this->postal = $postal;
        $this->street = $street;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone_number = $phone_number;
        $this->id_role = $id_role;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRegisterDate(): ?string
    {
        return $this->register_date;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getFristName(): ?string
    {
        return $this->firstname;
    }

    public function getLastName(): ?string
    {
        return $this->lastname;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function getId_role(): ?int
    {
        return $this->id_role;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;
        return $this;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function setRegisterDate(string $register_date): static
    {
        $this->register_date = $register_date;
        return $this;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function setPostal(string $postal): static
    {
        $this->postal = $postal;
        return $this;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function setFirstName(string $firstname): static
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastName(string $lastname): static
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setPhoneNumber(string $phone_number): static
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    public function setIdRole(int|string $id_role): static
    {
        $this->id_role = $id_role;
        return $this;
    }
}