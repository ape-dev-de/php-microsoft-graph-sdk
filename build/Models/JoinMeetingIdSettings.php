<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdSettings
 */
class JoinMeetingIdSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional. */
    public ?bool $isPasscodeRequired = null;

    /** The meeting ID to be used to join a meeting. Optional. Read-only. */
    public ?string $joinMeetingId = null;

    /** The passcode to join a meeting.  Optional. Read-only. */
    public ?string $passcode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isPasscodeRequired'])) {
            $this->isPasscodeRequired = is_bool($data['isPasscodeRequired']) ? $data['isPasscodeRequired'] : (bool)$data['isPasscodeRequired'];
        }
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
