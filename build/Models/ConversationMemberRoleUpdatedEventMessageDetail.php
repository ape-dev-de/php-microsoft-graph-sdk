<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationMemberRoleUpdatedEventMessageDetail
 */
class ConversationMemberRoleUpdatedEventMessageDetail
{
    /**
     * Roles for the coversation member user.
     * @var string[]
     */
    private array $conversationMemberRoles = [];

    /**
     * Identity of the conversation member user.
     */
    private ?string $conversationMemberUser;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;


    /**
     * @return string[]
     */
    public function getConversationMemberRoles(): array
    {
        return $this->conversationMemberRoles;
    }

    /**
     * @param string[] $conversationMemberRoles
     */
    public function setConversationMemberRoles(array $conversationMemberRoles): self
    {
        $this->conversationMemberRoles = $conversationMemberRoles;
        return $this;
    }

    public function getConversationMemberUser(): ?string
    {
        return $this->conversationMemberUser;
    }

    public function setConversationMemberUser(?string $conversationMemberUser): self
    {
        $this->conversationMemberUser = $conversationMemberUser;
        return $this;
    }

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

}
