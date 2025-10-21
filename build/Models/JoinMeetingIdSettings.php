<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdSettings
 */
class JoinMeetingIdSettings
{
    public function __construct(
        /** Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional. */
        public ?bool $isPasscodeRequired = null,
        /** The meeting ID to be used to join a meeting. Optional. Read-only. */
        public ?string $joinMeetingId = null,
        /** The passcode to join a meeting.  Optional. Read-only. */
        public ?string $passcode = null
    ) {}
}
