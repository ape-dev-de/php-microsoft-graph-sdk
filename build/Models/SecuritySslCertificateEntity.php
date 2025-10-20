<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificateEntity
 */
class SecuritySslCertificateEntity
{
    /**
     * A physical address of the entity.
     */
    private ?string $address;

    /**
     * Alternate names for this entity that are part of the certificate.
     */
    private ?string $alternateNames;

    /**
     * A common name for this entity.
     */
    private ?string $commonName;

    /**
     * An email for this entity.
     */
    private ?string $email;

    /**
     * If the entity is a person, this is the person''s given name (first name).
     */
    private ?string $givenName;

    /**
     * If the entity is an organization, this is the name of the organization.
     */
    private ?string $organizationName;

    /**
     * If the entity is an organization, this communicates if a unit in the organization is named on the entity.
     */
    private ?string $organizationUnitName;

    /**
     * A serial number assigned to the entity; usually only available if the entity is the issuer.
     */
    private ?string $serialNumber;

    /**
     * If the entity is a person, this is the person''s surname (last name).
     */
    private ?string $surname;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAlternateNames(): ?string
    {
        return $this->alternateNames;
    }

    public function setAlternateNames(?string $alternateNames): self
    {
        $this->alternateNames = $alternateNames;
        return $this;
    }

    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    public function setCommonName(?string $commonName): self
    {
        $this->commonName = $commonName;
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

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }

    public function getOrganizationName(): ?string
    {
        return $this->organizationName;
    }

    public function setOrganizationName(?string $organizationName): self
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    public function getOrganizationUnitName(): ?string
    {
        return $this->organizationUnitName;
    }

    public function setOrganizationUnitName(?string $organizationUnitName): self
    {
        $this->organizationUnitName = $organizationUnitName;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

}
