<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Person
 */
class Person
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The person's birthday. */
        public ?string $birthday = null,
        /** The name of the person's company. */
        public ?string $companyName = null,
        /** The person's department. */
        public ?string $department = null,
        /** The person's display name. */
        public ?string $displayName = null,
        /** The person's given name. */
        public ?string $givenName = null,
        /** The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only. */
        public ?string $imAddress = null,
        /** True if the user has flagged this person as a favorite. */
        public ?bool $isFavorite = null,
        /** The person's job title. */
        public ?string $jobTitle = null,
        /** The location of the person's office. */
        public ?string $officeLocation = null,
        /** Free-form notes that the user has taken about this person. */
        public ?string $personNotes = null,
        /** The type of person. */
        public ?PersonType $personType = null,
        /** The person's phone numbers. */
        public array $phones = [],
        /** The person's addresses. */
        public array $postalAddresses = [],
        /** The person's profession. */
        public ?string $profession = null,
        /** The person's email addresses. */
        public array $scoredEmailAddresses = [],
        /** The person's surname. */
        public ?string $surname = null,
        /** The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain. */
        public ?string $userPrincipalName = null,
        /** The person's websites. */
        public array $websites = [],
        /** The phonetic Japanese name of the person's company. */
        public ?string $yomiCompany = null
    ) {}
}
