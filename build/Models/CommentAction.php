<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommentAction
 */
class CommentAction
{
    /**
     * If true, this activity was a reply to an existing comment thread.
     */
    private ?bool $isReply;

    /**
     * The identity of the user who started the comment thread.
     */
    private ?string $parentAuthor;

    /**
     * The identities of the users participating in this comment thread.
     * @var string[]
     */
    private array $participants = [];


    public function getIsReply(): ?bool
    {
        return $this->isReply;
    }

    public function setIsReply(?bool $isReply): self
    {
        $this->isReply = $isReply;
        return $this;
    }

    public function getParentAuthor(): ?string
    {
        return $this->parentAuthor;
    }

    public function setParentAuthor(?string $parentAuthor): self
    {
        $this->parentAuthor = $parentAuthor;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param string[] $participants
     */
    public function setParticipants(array $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

}
