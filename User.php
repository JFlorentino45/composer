<?php

class User
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $gender;
    private string $ip_address;

    public function getFirstname(): string
    {
        return $this->first_name;
    }


    public function setFirstname(string $firstname): void
    {
        $this->first_name = $firstname;
    }

    public function getLastname(): string
    {
        return $this->last_name;
    }


    public function setLastname(string $lastname): void
    {
        $this->first_name = $lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getGender(): string
    {
        return $this->gender;
    }


    public function setGender(string $gender): void
    {
        $this->email = $gender;
    }

    public function getIpAddress(): string
    {
        return $this->ip_address;
    }


    public function setIpAddress(string $ipaddress): void
    {
        $this->ip_address = $ipaddress;
    }
}
