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
     */
    private ?string $initiator;

    /**
     * Represents whether the meeting chat is enabled or not.
     */
    private ?bool $meetingChatEnabled;

    /**
     * Unique identifier of the meeting chat.
     */
    private ?string $meetingChatId;

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getMeetingChatEnabled(): ?bool
    {
        return $this->meetingChatEnabled;
    }

    public function setMeetingChatEnabled(?bool $meetingChatEnabled): self
    {
        $this->meetingChatEnabled = $meetingChatEnabled;
        return $this;
    }

    public function getMeetingChatId(): ?string
    {
        return $this->meetingChatId;
    }

    public function setMeetingChatId(?string $meetingChatId): self
    {
        $this->meetingChatId = $meetingChatId;
        return $this;
    }

}
