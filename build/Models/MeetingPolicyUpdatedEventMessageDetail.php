<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingPolicyUpdatedEventMessageDetail
 */
class MeetingPolicyUpdatedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** Represents whether the meeting chat is enabled or not. */
    public ?bool $meetingChatEnabled = null;

    /** Unique identifier of the meeting chat. */
    public ?string $meetingChatId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['meetingChatEnabled'])) {
            $this->meetingChatEnabled = $data['meetingChatEnabled'];
        }
        if (isset($data['meetingChatId'])) {
            $this->meetingChatId = $data['meetingChatId'];
        }
    }
}
