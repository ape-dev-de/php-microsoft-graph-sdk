<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventTownhall
 */
class VirtualEventTownhall
{
    /**
     * The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue.
     */
    private ?string $audience;

    /**
     * Identity information of the coorganizers of the town hall.
     */
    private array $coOrganizers = [];

    /**
     * The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity.
     */
    private array $invitedAttendees = [];

    /**
     * Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization.
     */
    private ?string $isInviteOnly;


    public function getAudience(): ?string
    {
        return $this->audience;
    }

    public function setAudience(?string $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    public function getCoOrganizers(): array
    {
        return $this->coOrganizers;
    }

    public function setCoOrganizers(array $coOrganizers): self
    {
        $this->coOrganizers = $coOrganizers;
        return $this;
    }

    public function getInvitedAttendees(): array
    {
        return $this->invitedAttendees;
    }

    public function setInvitedAttendees(array $invitedAttendees): self
    {
        $this->invitedAttendees = $invitedAttendees;
        return $this;
    }

    public function getIsInviteOnly(): ?string
    {
        return $this->isInviteOnly;
    }

    public function setIsInviteOnly(?string $isInviteOnly): self
    {
        $this->isInviteOnly = $isInviteOnly;
        return $this;
    }

}
