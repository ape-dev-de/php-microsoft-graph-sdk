<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisContact
 */
class SecurityWhoisContact
{
    /**
     * The physical address of the entity.
     */
    private ?string $address;

    /**
     * The email of this WHOIS contact.
     */
    private ?string $email;

    /**
     * The fax of this WHOIS contact. No format is guaranteed.
     */
    private ?string $fax;

    /**
     * The name of this WHOIS contact.
     */
    private ?string $name;

    /**
     * The organization of this WHOIS contact.
     */
    private ?string $organization;

    /**
     * The telephone of this WHOIS contact. No format is guaranteed.
     */
    private ?string $telephone;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

}
