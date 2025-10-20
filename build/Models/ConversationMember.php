<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationMember
 */
class ConversationMember
{
    /**
     * The display name of the user.
     */
    private ?string $displayName;

    /**
     * The roles for that user. This property contains more qualifiers only when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is an in-tenant guest, the roles property contains guest as one of the values. A basic member shouldn''t have any values specified in the roles property. An Out-of-tenant external member is assigned the owner role.
     */
    private ?string $roles;

    /**
     * The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
     */
    private ?\DateTimeInterface $visibleHistoryStartDateTime;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(?string $roles): self
    {
        $this->roles = $roles;
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
