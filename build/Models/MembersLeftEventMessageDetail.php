<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersLeftEventMessageDetail
 */
class MembersLeftEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * List of members who left the chat.
     * @var string[]
     */
    private array $members = [];


    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param string[] $members
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

}
