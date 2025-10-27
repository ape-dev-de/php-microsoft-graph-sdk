<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeBase
 */
class AttendeeBase
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The recipient's email address.
     * @var EmailAddress|\stdClass|null
     */
    public EmailAddress|\stdClass|null $emailAddress = null;

    /** 
     * The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type.
     * @var AttendeeType|\stdClass|null
     */
    public AttendeeType|\stdClass|null $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['emailAddress'])) {
            $this->emailAddress = is_array($data['emailAddress']) ? new EmailAddress($data['emailAddress']) : $data['emailAddress'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? AttendeeType::tryFrom($data['type']) : $data['type'];
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
