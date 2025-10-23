<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Person
 */
class Person
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The person's birthday. */
    public ?string $birthday = null;

    /** The name of the person's company. */
    public ?string $companyName = null;

    /** The person's department. */
    public ?string $department = null;

    /** The person's display name. */
    public ?string $displayName = null;

    /** The person's given name. */
    public ?string $givenName = null;

    /** The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only. */
    public ?string $imAddress = null;

    /** True if the user has flagged this person as a favorite. */
    public ?bool $isFavorite = null;

    /** The person's job title. */
    public ?string $jobTitle = null;

    /** The location of the person's office. */
    public ?string $officeLocation = null;

    /** Free-form notes that the user has taken about this person. */
    public ?string $personNotes = null;

    /** 
     * The type of person.
     * @var PersonType|\stdClass|null
     */
    public mixed $personType = null;

    /** 
     * The person's phone numbers.
     * @var Phone[]
     */
    public array $phones = [];

    /** 
     * The person's addresses.
     * @var Location[]
     */
    public array $postalAddresses = [];

    /** The person's profession. */
    public ?string $profession = null;

    /** 
     * The person's email addresses.
     * @var ScoredEmailAddress[]
     */
    public array $scoredEmailAddresses = [];

    /** The person's surname. */
    public ?string $surname = null;

    /** The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain. */
    public ?string $userPrincipalName = null;

    /** 
     * The person's websites.
     * @var Website[]
     */
    public array $websites = [];

    /** The phonetic Japanese name of the person's company. */
    public ?string $yomiCompany = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['birthday'])) {
            $this->birthday = $data['birthday'];
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
        if (isset($data['givenName'])) {
            $this->givenName = $data['givenName'];
        }
        if (isset($data['imAddress'])) {
            $this->imAddress = $data['imAddress'];
        }
        if (isset($data['isFavorite'])) {
            $this->isFavorite = $data['isFavorite'];
        }
        if (isset($data['jobTitle'])) {
            $this->jobTitle = $data['jobTitle'];
        }
        if (isset($data['officeLocation'])) {
            $this->officeLocation = $data['officeLocation'];
        }
        if (isset($data['personNotes'])) {
            $this->personNotes = $data['personNotes'];
        }
        if (isset($data['personType'])) {
            $this->personType = $data['personType'];
        }
        if (isset($data['phones'])) {
            $this->phones = $data['phones'];
        }
        if (isset($data['postalAddresses'])) {
            $this->postalAddresses = $data['postalAddresses'];
        }
        if (isset($data['profession'])) {
            $this->profession = $data['profession'];
        }
        if (isset($data['scoredEmailAddresses'])) {
            $this->scoredEmailAddresses = $data['scoredEmailAddresses'];
        }
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['websites'])) {
            $this->websites = $data['websites'];
        }
        if (isset($data['yomiCompany'])) {
            $this->yomiCompany = $data['yomiCompany'];
        }
    }
}
