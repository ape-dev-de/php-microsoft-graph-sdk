<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdMeetingInfo
 */
class JoinMeetingIdMeetingInfo
{
    public function __construct(
        /** The ID used to join the meeting. */
        public ?string $joinMeetingId = null,
        /** The passcode used to join the meeting. Optional. */
        public ?string $passcode = null
    ) {}
}
