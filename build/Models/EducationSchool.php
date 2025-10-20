<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSchool
 */
class EducationSchool
{
    /**
     * Address of the school.
     */
    private ?string $address;

    /**
     * Entity who created the school.
     */
    private ?string $createdBy;

    /**
     * ID of school in syncing system.
     */
    private ?string $externalId;

    /**
     * ID of principal in syncing system.
     */
    private ?string $externalPrincipalId;

    /**
     */
    private ?string $fax;

    /**
     * Highest grade taught.
     */
    private ?string $highestGrade;

    /**
     * Lowest grade taught.
     */
    private ?string $lowestGrade;

    /**
     * Phone number of school.
     */
    private ?string $phone;

    /**
     * Email address of the principal.
     */
    private ?string $principalEmail;

    /**
     * Name of the principal.
     */
    private ?string $principalName;

    /**
     * School Number.
     */
    private ?string $schoolNumber;

    /**
     * The underlying administrativeUnit for this school.
     */
    private ?string $administrativeUnit;

    /**
     * Classes taught at the school. Nullable.
     */
    private array $classes = [];

    /**
     * Users in the school. Nullable.
     */
    private ?string $users;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getExternalPrincipalId(): ?string
    {
        return $this->externalPrincipalId;
    }

    public function setExternalPrincipalId(?string $externalPrincipalId): self
    {
        $this->externalPrincipalId = $externalPrincipalId;
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

    public function getHighestGrade(): ?string
    {
        return $this->highestGrade;
    }

    public function setHighestGrade(?string $highestGrade): self
    {
        $this->highestGrade = $highestGrade;
        return $this;
    }

    public function getLowestGrade(): ?string
    {
        return $this->lowestGrade;
    }

    public function setLowestGrade(?string $lowestGrade): self
    {
        $this->lowestGrade = $lowestGrade;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPrincipalEmail(): ?string
    {
        return $this->principalEmail;
    }

    public function setPrincipalEmail(?string $principalEmail): self
    {
        $this->principalEmail = $principalEmail;
        return $this;
    }

    public function getPrincipalName(): ?string
    {
        return $this->principalName;
    }

    public function setPrincipalName(?string $principalName): self
    {
        $this->principalName = $principalName;
        return $this;
    }

    public function getSchoolNumber(): ?string
    {
        return $this->schoolNumber;
    }

    public function setSchoolNumber(?string $schoolNumber): self
    {
        $this->schoolNumber = $schoolNumber;
        return $this;
    }

    public function getAdministrativeUnit(): ?string
    {
        return $this->administrativeUnit;
    }

    public function setAdministrativeUnit(?string $administrativeUnit): self
    {
        $this->administrativeUnit = $administrativeUnit;
        return $this;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

    public function setClasses(array $classes): self
    {
        $this->classes = $classes;
        return $this;
    }

    public function getUsers(): ?string
    {
        return $this->users;
    }

    public function setUsers(?string $users): self
    {
        $this->users = $users;
        return $this;
    }

}
