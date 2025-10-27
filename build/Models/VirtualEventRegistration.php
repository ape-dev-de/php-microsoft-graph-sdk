<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistration
 */
class VirtualEventRegistration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when the registrant cancels their registration for the virtual event. Only appears when applicable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $cancelationDateTime = null;

    /** Email address of the registrant. */
    public ?string $email = null;

    /** 
     * The external information for a virtual event registration.
     * @var VirtualEventExternalRegistrationInformation|\stdClass|null
     */
    public mixed $externalRegistrationInformation = null;

    /** First name of the registrant. */
    public ?string $firstName = null;

    /** Last name of the registrant. */
    public ?string $lastName = null;

    /** The registrant's preferred language. */
    public ?string $preferredLanguage = null;

    /** The registrant's time zone details. */
    public ?string $preferredTimezone = null;

    /** Date and time when the registrant registers for the virtual event. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $registrationDateTime = null;

    /** 
     * The registrant's answer to the registration questions.
     * @var VirtualEventRegistrationQuestionAnswer[]
     */
    public array $registrationQuestionAnswers = [];

    /** 
     * Registration status of the registrant. Read-only. Possible values are registered, canceled, waitlisted, pendingApproval, rejectedByOrganizer, and unknownFutureValue.
     * @var VirtualEventAttendeeRegistrationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The registrant's ID in Microsoft Entra ID. Only appears when the registrant is registered in Microsoft Entra ID. */
    public ?string $userId = null;

    /** 
     * Sessions for a registration.
     * @var VirtualEventSession[]
     */
    public array $sessions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['cancelationDateTime'])) {
            $this->cancelationDateTime = is_string($data['cancelationDateTime']) ? new \DateTimeImmutable($data['cancelationDateTime']) : $data['cancelationDateTime'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['externalRegistrationInformation'])) {
            $this->externalRegistrationInformation = is_array($data['externalRegistrationInformation']) ? new VirtualEventExternalRegistrationInformation($data['externalRegistrationInformation']) : $data['externalRegistrationInformation'];
        }
        if (isset($data['firstName'])) {
            $this->firstName = $data['firstName'];
        }
        if (isset($data['lastName'])) {
            $this->lastName = $data['lastName'];
        }
        if (isset($data['preferredLanguage'])) {
            $this->preferredLanguage = $data['preferredLanguage'];
        }
        if (isset($data['preferredTimezone'])) {
            $this->preferredTimezone = $data['preferredTimezone'];
        }
        if (isset($data['registrationDateTime'])) {
            $this->registrationDateTime = is_string($data['registrationDateTime']) ? new \DateTimeImmutable($data['registrationDateTime']) : $data['registrationDateTime'];
        }
        if (isset($data['registrationQuestionAnswers'])) {
            $this->registrationQuestionAnswers = $data['registrationQuestionAnswers'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new VirtualEventAttendeeRegistrationStatus($data['status']) : $data['status'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['sessions'])) {
            $this->sessions = $data['sessions'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
