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
     * @var string[]
     */
    private array $mentionees = [];


    /**
     * @return string[]
     */
    public function getMentionees(): array
    {
        return $this->mentionees;
    }

    /**
     * @param string[] $mentionees
     */
    public function setMentionees(array $mentionees): self
    {
        $this->mentionees = $mentionees;
        return $this;
    }

}
