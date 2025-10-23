<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Contact
 */
class Contact
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The categories associated with the item
     * @var string[]
     */
    public array $categories = [];

    /** Identifies the version of the item. Every time the item is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
    public ?string $changeKey = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The name of the contact's assistant. */
    public ?string $assistantName = null;

    /** The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $birthday = null;

    /** 
     * The contact's business address.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $businessAddress = null;

    /** The business home page of the contact. */
    public ?string $businessHomePage = null;

    /** 
     * The contact's business phone numbers.
     * @var string[]
     */
    public array $businessPhones = [];

    /** 
     * The names of the contact's children.
     * @var string[]
     */
    public array $children = [];

    /** The name of the contact's company. */
    public ?string $companyName = null;

    /** The contact's department. */
    public ?string $department = null;

    /** The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation. */
    public ?string $displayName = null;

    /** 
     * The contact's email addresses.
     * @var EmailAddress[]
     */
    public array $emailAddresses = [];

    /** The name the contact is filed under. */
    public ?string $fileAs = null;

    /** The contact's suffix. */
    public ?string $generation = null;

    /** The contact's given name. */
    public ?string $givenName = null;

    /** 
     * The contact's home address.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $homeAddress = null;

    /** 
     * The contact's home phone numbers.
     * @var string[]
     */
    public array $homePhones = [];

    /** 
     * The contact's instant messaging (IM) addresses.
     * @var string[]
     */
    public array $imAddresses = [];

    /** The contact's initials. */
    public ?string $initials = null;

    /** The contact’s job title. */
    public ?string $jobTitle = null;

    /** The name of the contact's manager. */
    public ?string $manager = null;

    /** The contact's middle name. */
    public ?string $middleName = null;

    /** The contact's mobile phone number. */
    public ?string $mobilePhone = null;

    /** The contact's nickname. */
    public ?string $nickName = null;

    /** The location of the contact's office. */
    public ?string $officeLocation = null;

    /** 
     * Other addresses for the contact.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $otherAddress = null;

    /** The ID of the contact's parent folder. */
    public ?string $parentFolderId = null;

    /** The user's notes about the contact. */
    public ?string $personalNotes = null;

    /** The contact's profession. */
    public ?string $profession = null;

    /** The name of the contact's spouse/partner. */
    public ?string $spouseName = null;

    /** The contact's surname. */
    public ?string $surname = null;

    /** The contact's title. */
    public ?string $title = null;

    /** The phonetic Japanese company name of the contact. */
    public ?string $yomiCompanyName = null;

    /** The phonetic Japanese given name (first name) of the contact. */
    public ?string $yomiGivenName = null;

    /** The phonetic Japanese surname (last name)  of the contact. */
    public ?string $yomiSurname = null;

    /** 
     * The collection of open extensions defined for the contact. Read-only. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * Optional contact picture. You can get or set a photo for a contact.
     * @var ProfilePhoto|\stdClass|null
     */
    public mixed $photo = null;

    /** 
     * The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['changeKey'])) {
            $this->changeKey = $data['changeKey'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['assistantName'])) {
            $this->assistantName = $data['assistantName'];
        }
        if (isset($data['birthday'])) {
            $this->birthday = is_string($data['birthday']) ? new \DateTimeImmutable($data['birthday']) : $data['birthday'];
        }
        if (isset($data['businessAddress'])) {
            $this->businessAddress = is_array($data['businessAddress']) ? new PhysicalAddress($data['businessAddress']) : $data['businessAddress'];
        }
        if (isset($data['businessHomePage'])) {
            $this->businessHomePage = $data['businessHomePage'];
        }
        if (isset($data['businessPhones'])) {
            $this->businessPhones = $data['businessPhones'];
        }
        if (isset($data['children'])) {
            $this->children = $data['children'];
        }
        if (isset($data['companyName'])) {
            $this->companyName = $data['companyName'];
        }
        if (isset($data['department'])) {
            $this->department = $data['department'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['emailAddresses'])) {
            $this->emailAddresses = $data['emailAddresses'];
        }
        if (isset($data['fileAs'])) {
            $this->fileAs = $data['fileAs'];
        }
        if (isset($data['generation'])) {
            $this->generation = $data['generation'];
        }
        if (isset($data['givenName'])) {
            $this->givenName = $data['givenName'];
        }
        if (isset($data['homeAddress'])) {
            $this->homeAddress = is_array($data['homeAddress']) ? new PhysicalAddress($data['homeAddress']) : $data['homeAddress'];
        }
        if (isset($data['homePhones'])) {
            $this->homePhones = $data['homePhones'];
        }
        if (isset($data['imAddresses'])) {
            $this->imAddresses = $data['imAddresses'];
        }
        if (isset($data['initials'])) {
            $this->initials = $data['initials'];
        }
        if (isset($data['jobTitle'])) {
            $this->jobTitle = $data['jobTitle'];
        }
        if (isset($data['manager'])) {
            $this->manager = $data['manager'];
        }
        if (isset($data['middleName'])) {
            $this->middleName = $data['middleName'];
        }
        if (isset($data['mobilePhone'])) {
            $this->mobilePhone = $data['mobilePhone'];
        }
        if (isset($data['nickName'])) {
            $this->nickName = $data['nickName'];
        }
        if (isset($data['officeLocation'])) {
            $this->officeLocation = $data['officeLocation'];
        }
        if (isset($data['otherAddress'])) {
            $this->otherAddress = is_array($data['otherAddress']) ? new PhysicalAddress($data['otherAddress']) : $data['otherAddress'];
        }
        if (isset($data['parentFolderId'])) {
            $this->parentFolderId = $data['parentFolderId'];
        }
        if (isset($data['personalNotes'])) {
            $this->personalNotes = $data['personalNotes'];
        }
        if (isset($data['profession'])) {
            $this->profession = $data['profession'];
        }
        if (isset($data['spouseName'])) {
            $this->spouseName = $data['spouseName'];
        }
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['yomiCompanyName'])) {
            $this->yomiCompanyName = $data['yomiCompanyName'];
        }
        if (isset($data['yomiGivenName'])) {
            $this->yomiGivenName = $data['yomiGivenName'];
        }
        if (isset($data['yomiSurname'])) {
            $this->yomiSurname = $data['yomiSurname'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['photo'])) {
            $this->photo = is_array($data['photo']) ? new ProfilePhoto($data['photo']) : $data['photo'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
        }
    }
}
