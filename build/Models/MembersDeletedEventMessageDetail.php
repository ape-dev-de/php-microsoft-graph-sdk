<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersDeletedEventMessageDetail
 */
class MembersDeletedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * List of members deleted.
     */
    private ?string $members;

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(?string $members): self
    {
        $this->members = $members;
        return $this;
    }

}
