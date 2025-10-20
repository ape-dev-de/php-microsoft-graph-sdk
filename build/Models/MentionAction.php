<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MentionAction
 */
class MentionAction
{
    /**
     * The identities of the users mentioned in this action.
     */
    private ?string $mentionees;

    public function getMentionees(): ?string
    {
        return $this->mentionees;
    }

    public function setMentionees(?string $mentionees): self
    {
        $this->mentionees = $mentionees;
        return $this;
    }

}
