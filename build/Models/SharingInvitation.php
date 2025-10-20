<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingInvitation
 */
class SharingInvitation
{
    /**
     * The email address provided for the recipient of the sharing invitation. Read-only.
     */
    private ?string $email;

    /**
     * Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
     */
    private ?string $invitedBy;

    /**
     */
    private ?string $redeemedBy;

    /**
     * If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
     */
    private ?string $signInRequired;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getInvitedBy(): ?string
    {
        return $this->invitedBy;
    }

    public function setInvitedBy(?string $invitedBy): self
    {
        $this->invitedBy = $invitedBy;
        return $this;
    }

    public function getRedeemedBy(): ?string
    {
        return $this->redeemedBy;
    }

    public function setRedeemedBy(?string $redeemedBy): self
    {
        $this->redeemedBy = $redeemedBy;
        return $this;
    }

    public function getSignInRequired(): ?string
    {
        return $this->signInRequired;
    }

    public function setSignInRequired(?string $signInRequired): self
    {
        $this->signInRequired = $signInRequired;
        return $this;
    }

}
