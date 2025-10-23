<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdMeetingInfo
 */
class JoinMeetingIdMeetingInfo
{
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
        if (isset($data['joinMeetingId'])) {
            $this->joinMeetingId = $data['joinMeetingId'];
        }
        if (isset($data['passcode'])) {
            $this->passcode = $data['passcode'];
        }
    }
}
