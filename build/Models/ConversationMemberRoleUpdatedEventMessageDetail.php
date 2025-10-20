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
     */
    private ?string $conversationMemberRoles;

    /**
     * Identity of the conversation member user.
     */
    private ?string $conversationMemberUser;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    public function getConversationMemberRoles(): ?string
    {
        return $this->conversationMemberRoles;
    }

    public function setConversationMemberRoles(?string $conversationMemberRoles): self
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
