<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Contact
 */
class Contact
{
    /**
     * The name of the contact's assistant.
     */
    private ?string $assistantName;

    /**
     * The contact''s birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $birthday;

    /**
     * The contact's business address.
     */
    private ?string $businessAddress;

    /**
     * The business home page of the contact.
     */
    private ?string $businessHomePage;

    /**
     * The contact's business phone numbers.
     * @var string[]
     */
    private array $businessPhones = [];

    /**
     * The names of the contact's children.
     * @var string[]
     */
    private array $children = [];

    /**
     * The name of the contact's company.
     */
    private ?string $companyName;

    /**
     * The contact's department.
     */
    private ?string $department;

    /**
     * The contact''s display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     */
    private ?string $displayName;

    /**
     * The contact's email addresses.
     */
    private array $emailAddresses = [];

    /**
     * The name the contact is filed under.
     */
    private ?string $fileAs;

    /**
     * The contact's suffix.
     */
    private ?string $generation;

    /**
     * The contact's given name.
     */
    private ?string $givenName;

    /**
     * The contact's home address.
     */
    private ?string $homeAddress;

    /**
     * The contact's home phone numbers.
     * @var string[]
     */
    private array $homePhones = [];

    /**
     * The contact's instant messaging (IM) addresses.
     * @var string[]
     */
    private array $imAddresses = [];

    /**
     * The contact's initials.
     */
    private ?string $initials;

    /**
     * The contact’s job title.
     */
    private ?string $jobTitle;

    /**
     * The name of the contact's manager.
     */
    private ?string $manager;

    /**
     * The contact's middle name.
     */
    private ?string $middleName;

    /**
     * The contact's mobile phone number.
     */
    private ?string $mobilePhone;

    /**
     * The contact's nickname.
     */
    private ?string $nickName;

    /**
     * The location of the contact's office.
     */
    private ?string $officeLocation;

    /**
     * Other addresses for the contact.
     */
    private ?string $otherAddress;

    /**
     * The ID of the contact's parent folder.
     */
    private ?string $parentFolderId;

    /**
     * The user's notes about the contact.
     */
    private ?string $personalNotes;

    /**
     * The contact's profession.
     */
    private ?string $profession;

    /**
     * The name of the contact's spouse/partner.
     */
    private ?string $spouseName;

    /**
     * The contact's surname.
     */
    private ?string $surname;

    /**
     * The contact's title.
     */
    private ?string $title;

    /**
     * The phonetic Japanese company name of the contact.
     */
    private ?string $yomiCompanyName;

    /**
     * The phonetic Japanese given name (first name) of the contact.
     */
    private ?string $yomiGivenName;

    /**
     * The phonetic Japanese surname (last name)  of the contact.
     */
    private ?string $yomiSurname;

    /**
     * The collection of open extensions defined for the contact. Read-only. Nullable.
     */
    private array $extensions = [];

    /**
     * The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * Optional contact picture. You can get or set a photo for a contact.
     */
    private ?string $photo;

    /**
     * The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @var string[]
     */
    private array $singleValueExtendedProperties = [];


    public function getAssistantName(): ?string
    {
        return $this->assistantName;
    }

    public function setAssistantName(?string $assistantName): self
    {
        $this->assistantName = $assistantName;
        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getBusinessAddress(): ?string
    {
        return $this->businessAddress;
    }

    public function setBusinessAddress(?string $businessAddress): self
    {
        $this->businessAddress = $businessAddress;
        return $this;
    }

    public function getBusinessHomePage(): ?string
    {
        return $this->businessHomePage;
    }

    public function setBusinessHomePage(?string $businessHomePage): self
    {
        $this->businessHomePage = $businessHomePage;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBusinessPhones(): array
    {
        return $this->businessPhones;
    }

    /**
     * @param string[] $businessPhones
     */
    public function setBusinessPhones(array $businessPhones): self
    {
        $this->businessPhones = $businessPhones;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param string[] $children
     */
    public function setChildren(array $children): self
    {
        $this->children = $children;
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

    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }

    public function setEmailAddresses(array $emailAddresses): self
    {
        $this->emailAddresses = $emailAddresses;
        return $this;
    }

    public function getFileAs(): ?string
    {
        return $this->fileAs;
    }

    public function setFileAs(?string $fileAs): self
    {
        $this->fileAs = $fileAs;
        return $this;
    }

    public function getGeneration(): ?string
    {
        return $this->generation;
    }

    public function setGeneration(?string $generation): self
    {
        $this->generation = $generation;
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

    public function getHomeAddress(): ?string
    {
        return $this->homeAddress;
    }

    public function setHomeAddress(?string $homeAddress): self
    {
        $this->homeAddress = $homeAddress;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHomePhones(): array
    {
        return $this->homePhones;
    }

    /**
     * @param string[] $homePhones
     */
    public function setHomePhones(array $homePhones): self
    {
        $this->homePhones = $homePhones;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImAddresses(): array
    {
        return $this->imAddresses;
    }

    /**
     * @param string[] $imAddresses
     */
    public function setImAddresses(array $imAddresses): self
    {
        $this->imAddresses = $imAddresses;
        return $this;
    }

    public function getInitials(): ?string
    {
        return $this->initials;
    }

    public function setInitials(?string $initials): self
    {
        $this->initials = $initials;
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

    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(?string $manager): self
    {
        $this->manager = $manager;
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;
        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
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

    public function getOtherAddress(): ?string
    {
        return $this->otherAddress;
    }

    public function setOtherAddress(?string $otherAddress): self
    {
        $this->otherAddress = $otherAddress;
        return $this;
    }

    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    public function setParentFolderId(?string $parentFolderId): self
    {
        $this->parentFolderId = $parentFolderId;
        return $this;
    }

    public function getPersonalNotes(): ?string
    {
        return $this->personalNotes;
    }

    public function setPersonalNotes(?string $personalNotes): self
    {
        $this->personalNotes = $personalNotes;
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

    public function getSpouseName(): ?string
    {
        return $this->spouseName;
    }

    public function setSpouseName(?string $spouseName): self
    {
        $this->spouseName = $spouseName;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getYomiCompanyName(): ?string
    {
        return $this->yomiCompanyName;
    }

    public function setYomiCompanyName(?string $yomiCompanyName): self
    {
        $this->yomiCompanyName = $yomiCompanyName;
        return $this;
    }

    public function getYomiGivenName(): ?string
    {
        return $this->yomiGivenName;
    }

    public function setYomiGivenName(?string $yomiGivenName): self
    {
        $this->yomiGivenName = $yomiGivenName;
        return $this;
    }

    public function getYomiSurname(): ?string
    {
        return $this->yomiSurname;
    }

    public function setYomiSurname(?string $yomiSurname): self
    {
        $this->yomiSurname = $yomiSurname;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getMultiValueExtendedProperties(): array
    {
        return $this->multiValueExtendedProperties;
    }

    public function setMultiValueExtendedProperties(array $multiValueExtendedProperties): self
    {
        $this->multiValueExtendedProperties = $multiValueExtendedProperties;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSingleValueExtendedProperties(): array
    {
        return $this->singleValueExtendedProperties;
    }

    /**
     * @param string[] $singleValueExtendedProperties
     */
    public function setSingleValueExtendedProperties(array $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
