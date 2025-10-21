<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Contact
 */
class Contact
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] The categories associated with the item */
        public array $categories = [],
        /** Identifies the version of the item. Every time the item is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
        public ?string $changeKey = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The name of the contact's assistant. */
        public ?string $assistantName = null,
        /** The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $birthday = null,
        /** The contact's business address. */
        public ?PhysicalAddress $businessAddress = null,
        /** The business home page of the contact. */
        public ?string $businessHomePage = null,
        /** @var string[] The contact's business phone numbers. */
        public array $businessPhones = [],
        /** @var string[] The names of the contact's children. */
        public array $children = [],
        /** The name of the contact's company. */
        public ?string $companyName = null,
        /** The contact's department. */
        public ?string $department = null,
        /** The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation. */
        public ?string $displayName = null,
        /** The contact's email addresses. */
        public array $emailAddresses = [],
        /** The name the contact is filed under. */
        public ?string $fileAs = null,
        /** The contact's suffix. */
        public ?string $generation = null,
        /** The contact's given name. */
        public ?string $givenName = null,
        /** The contact's home address. */
        public ?PhysicalAddress $homeAddress = null,
        /** @var string[] The contact's home phone numbers. */
        public array $homePhones = [],
        /** @var string[] The contact's instant messaging (IM) addresses. */
        public array $imAddresses = [],
        /** The contact's initials. */
        public ?string $initials = null,
        /** The contact’s job title. */
        public ?string $jobTitle = null,
        /** The name of the contact's manager. */
        public ?string $manager = null,
        /** The contact's middle name. */
        public ?string $middleName = null,
        /** The contact's mobile phone number. */
        public ?string $mobilePhone = null,
        /** The contact's nickname. */
        public ?string $nickName = null,
        /** The location of the contact's office. */
        public ?string $officeLocation = null,
        /** Other addresses for the contact. */
        public ?PhysicalAddress $otherAddress = null,
        /** The ID of the contact's parent folder. */
        public ?string $parentFolderId = null,
        /** The user's notes about the contact. */
        public ?string $personalNotes = null,
        /** The contact's profession. */
        public ?string $profession = null,
        /** The name of the contact's spouse/partner. */
        public ?string $spouseName = null,
        /** The contact's surname. */
        public ?string $surname = null,
        /** The contact's title. */
        public ?string $title = null,
        /** The phonetic Japanese company name of the contact. */
        public ?string $yomiCompanyName = null,
        /** The phonetic Japanese given name (first name) of the contact. */
        public ?string $yomiGivenName = null,
        /** The phonetic Japanese surname (last name)  of the contact. */
        public ?string $yomiSurname = null,
        /** The collection of open extensions defined for the contact. Read-only. Nullable. */
        public array $extensions = [],
        /** The collection of multi-value extended properties defined for the contact. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** Optional contact picture. You can get or set a photo for a contact. */
        public ?ProfilePhoto $photo = null,
        /** The collection of single-value extended properties defined for the contact. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
