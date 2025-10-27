<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingPolicyUpdatedEventMessageDetail
 */
class MeetingPolicyUpdatedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $initiator = null;

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
        $this->rawData = $data;
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['meetingChatEnabled'])) {
            $this->meetingChatEnabled = is_bool($data['meetingChatEnabled']) ? $data['meetingChatEnabled'] : (bool)$data['meetingChatEnabled'];
        }
        if (isset($data['meetingChatId'])) {
            $this->meetingChatId = $data['meetingChatId'];
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
