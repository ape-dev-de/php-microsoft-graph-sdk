<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdMeetingInfo
 */
class JoinMeetingIdMeetingInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID used to join the meeting. */
    public ?string $joinMeetingId = null;

    /** The passcode used to join the meeting. Optional. */
    public ?string $passcode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['joinMeetingId'])) {
            $this->joinMeetingId = $data['joinMeetingId'];
        }
        if (isset($data['passcode'])) {
            $this->passcode = $data['passcode'];
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
