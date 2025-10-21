<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingPolicyUpdatedEventMessageDetail
 */
class MeetingPolicyUpdatedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** Represents whether the meeting chat is enabled or not. */
        public ?bool $meetingChatEnabled = null,
        /** Unique identifier of the meeting chat. */
        public ?string $meetingChatId = null
    ) {}
}
