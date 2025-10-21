<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Person
 */
class Person
{
    /**
     * The person's birthday.
     */
    private ?string $birthday;

    /**
     * The name of the person's company.
     */
    private ?string $companyName;

    /**
     * The person's department.
     */
    private ?string $department;

    /**
     * The person's display name.
     */
    private ?string $displayName;

    /**
     * The person's given name.
     */
    private ?string $givenName;

    /**
     * The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
     */
    private ?string $imAddress;

    /**
     * True if the user has flagged this person as a favorite.
     */
    private ?bool $isFavorite;

    /**
     * The person's job title.
     */
    private ?string $jobTitle;

    /**
     * The location of the person's office.
     */
    private ?string $officeLocation;

    /**
     * Free-form notes that the user has taken about this person.
     */
    private ?string $personNotes;

    /**
     * The type of person.
     */
    private ?string $personType;

    /**
     * The person's phone numbers.
     */
    private array $phones = [];

    /**
     * The person's addresses.
     */
    private array $postalAddresses = [];

    /**
     * The person's profession.
     */
    private ?string $profession;

    /**
     * The person's email addresses.
     */
    private array $scoredEmailAddresses = [];

    /**
     * The person's surname.
     */
    private ?string $surname;

    /**
     * The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person''s email name. The general format is alias@domain.
     */
    private ?string $userPrincipalName;

    /**
     * The person's websites.
     */
    private array $websites = [];

    /**
     * The phonetic Japanese name of the person's company.
     */
    private ?string $yomiCompany;


    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getImAddress(): ?string
    {
        return $this->imAddress;
    }

    public function setImAddress(?string $imAddress): self
    {
        $this->imAddress = $imAddress;
        return $this;
    }

    public function getIsFavorite(): ?bool
    {
        return $this->isFavorite;
    }

    public function setIsFavorite(?bool $isFavorite): self
    {
        $this->isFavorite = $isFavorite;
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getOfficeLocation(): ?string
    {
        return $this->officeLocation;
    }

    public function setOfficeLocation(?string $officeLocation): self
    {
        $this->officeLocation = $officeLocation;
        return $this;
    }

    public function getPersonNotes(): ?string
    {
        return $this->personNotes;
    }

    public function setPersonNotes(?string $personNotes): self
    {
        $this->personNotes = $personNotes;
        return $this;
    }

    public function getPersonType(): ?string
    {
        return $this->personType;
    }

    public function setPersonType(?string $personType): self
    {
        $this->personType = $personType;
        return $this;
    }

    public function getPhones(): array
    {
        return $this->phones;
    }

    public function setPhones(array $phones): self
    {
        $this->phones = $phones;
        return $this;
    }

    public function getPostalAddresses(): array
    {
        return $this->postalAddresses;
    }

    public function setPostalAddresses(array $postalAddresses): self
    {
        $this->postalAddresses = $postalAddresses;
        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;
        return $this;
    }

    public function getScoredEmailAddresses(): array
    {
        return $this->scoredEmailAddresses;
    }

    public function setScoredEmailAddresses(array $scoredEmailAddresses): self
    {
        $this->scoredEmailAddresses = $scoredEmailAddresses;
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

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    public function getWebsites(): array
    {
        return $this->websites;
    }

    public function setWebsites(array $websites): self
    {
        $this->websites = $websites;
        return $this;
    }

    public function getYomiCompany(): ?string
    {
        return $this->yomiCompany;
    }

    public function setYomiCompany(?string $yomiCompany): self
    {
        $this->yomiCompany = $yomiCompany;
        return $this;
    }

}
