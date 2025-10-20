<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersAddedEventMessageDetail
 */
class MembersAddedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * List of members added.
     */
    private array $members = [];

    /**
     * The timestamp that denotes how far back a conversation's history is shared with the conversation members.
     */
    private ?\DateTimeInterface $visibleHistoryStartDateTime;

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getVisibleHistoryStartDateTime(): ?\DateTimeInterface
    {
        return $this->visibleHistoryStartDateTime;
    }

    public function setVisibleHistoryStartDateTime(?\DateTimeInterface $visibleHistoryStartDateTime): self
    {
        $this->visibleHistoryStartDateTime = $visibleHistoryStartDateTime;
        return $this;
    }

}
