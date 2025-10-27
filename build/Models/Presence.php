<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Presence
 */
class Presence
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The supplemental information to a user's availability. Possible values are available, away, beRightBack, busy, doNotDisturb, offline, outOfOffice, presenceUnknown. */
    public ?string $activity = null;

    /** The base presence information for a user. Possible values are available, away, beRightBack, busy, doNotDisturb, focusing, inACall, inAMeeting, offline, presenting, presenceUnknown. */
    public ?string $availability = null;

    /** 
     * The out of office settings for a user.
     * @var OutOfOfficeSettings|\stdClass|null
     */
    public mixed $outOfOfficeSettings = null;

    /** The lexicographically sortable String stamp that represents the version of a presence object. */
    public ?string $sequenceNumber = null;

    /** 
     * The presence status message of a user.
     * @var PresenceStatusMessage|\stdClass|null
     */
    public mixed $statusMessage = null;


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
        if (isset($data['activity'])) {
            $this->activity = $data['activity'];
        }
        if (isset($data['availability'])) {
            $this->availability = $data['availability'];
        }
        if (isset($data['outOfOfficeSettings'])) {
            $this->outOfOfficeSettings = is_array($data['outOfOfficeSettings']) ? new OutOfOfficeSettings($data['outOfOfficeSettings']) : $data['outOfOfficeSettings'];
        }
        if (isset($data['sequenceNumber'])) {
            $this->sequenceNumber = $data['sequenceNumber'];
        }
        if (isset($data['statusMessage'])) {
            $this->statusMessage = is_array($data['statusMessage']) ? new PresenceStatusMessage($data['statusMessage']) : $data['statusMessage'];
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
