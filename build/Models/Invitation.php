<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Invitation
 */
class Invitation
{
    /**
     * The display name of the user being invited.
     */
    private ?string $invitedUserDisplayName;

    /**
     * The email address of the user being invited. Required. The following special characters aren''t permitted in the email address:Tilde (~)Exclamation point (!)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (/|)Semicolon (;)Colon (:)Quotation marks ('')Angle brackets (< >)Question mark (?)Comma (,)However, the following exceptions apply:A period (.) or a hyphen (-) is permitted anywhere in the user name, except at the beginning or end of the name.An underscore (_) is permitted anywhere in the user name, including at the beginning or end of the name.
     */
    private ?string $invitedUserEmailAddress;

    /**
     * Contains configuration for the message being sent to the invited user, including customizing message text, language, and cc recipient list.
     */
    private ?string $invitedUserMessageInfo;

    /**
     * The userType of the user being invited. By default, this is Guest. You can invite as Member if you''re a company administrator.
     */
    private ?string $invitedUserType;

    /**
     * The URL the user can use to redeem their invitation. Read-only.
     */
    private ?string $inviteRedeemUrl;

    /**
     * The URL the user should be redirected to after the invitation is redeemed. Required.
     */
    private ?string $inviteRedirectUrl;

    /**
     * Reset the user''s redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. When true, the invitedUser/id relationship is required. For more information about using this property, see Reset redemption status for a guest user.
     */
    private ?bool $resetRedemption;

    /**
     * Indicates whether an email should be sent to the user being invited. The default is false.
     */
    private ?bool $sendInvitationMessage;

    /**
     * The status of the invitation. Possible values are: PendingAcceptance, Completed, InProgress, and Error.
     */
    private ?string $status;

    /**
     * The user created as part of the invitation creation. Read-only. The id property is required in the request body to reset a redemption status.
     */
    private ?string $invitedUser;

    /**
     * The users or groups who are sponsors of the invited user. Sponsors are users and groups that are responsible for guest users' privileges in the tenant and for keeping the guest users' information and access up to date.
     */
    private ?string $invitedUserSponsors;

    public function getInvitedUserDisplayName(): ?string
    {
        return $this->invitedUserDisplayName;
    }

    public function setInvitedUserDisplayName(?string $invitedUserDisplayName): self
    {
        $this->invitedUserDisplayName = $invitedUserDisplayName;
        return $this;
    }

    public function getInvitedUserEmailAddress(): ?string
    {
        return $this->invitedUserEmailAddress;
    }

    public function setInvitedUserEmailAddress(?string $invitedUserEmailAddress): self
    {
        $this->invitedUserEmailAddress = $invitedUserEmailAddress;
        return $this;
    }

    public function getInvitedUserMessageInfo(): ?string
    {
        return $this->invitedUserMessageInfo;
    }

    public function setInvitedUserMessageInfo(?string $invitedUserMessageInfo): self
    {
        $this->invitedUserMessageInfo = $invitedUserMessageInfo;
        return $this;
    }

    public function getInvitedUserType(): ?string
    {
        return $this->invitedUserType;
    }

    public function setInvitedUserType(?string $invitedUserType): self
    {
        $this->invitedUserType = $invitedUserType;
        return $this;
    }

    public function getInviteRedeemUrl(): ?string
    {
        return $this->inviteRedeemUrl;
    }

    public function setInviteRedeemUrl(?string $inviteRedeemUrl): self
    {
        $this->inviteRedeemUrl = $inviteRedeemUrl;
        return $this;
    }

    public function getInviteRedirectUrl(): ?string
    {
        return $this->inviteRedirectUrl;
    }

    public function setInviteRedirectUrl(?string $inviteRedirectUrl): self
    {
        $this->inviteRedirectUrl = $inviteRedirectUrl;
        return $this;
    }

    public function getResetRedemption(): ?bool
    {
        return $this->resetRedemption;
    }

    public function setResetRedemption(?bool $resetRedemption): self
    {
        $this->resetRedemption = $resetRedemption;
        return $this;
    }

    public function getSendInvitationMessage(): ?bool
    {
        return $this->sendInvitationMessage;
    }

    public function setSendInvitationMessage(?bool $sendInvitationMessage): self
    {
        $this->sendInvitationMessage = $sendInvitationMessage;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getInvitedUser(): ?string
    {
        return $this->invitedUser;
    }

    public function setInvitedUser(?string $invitedUser): self
    {
        $this->invitedUser = $invitedUser;
        return $this;
    }

    public function getInvitedUserSponsors(): ?string
    {
        return $this->invitedUserSponsors;
    }

    public function setInvitedUserSponsors(?string $invitedUserSponsors): self
    {
        $this->invitedUserSponsors = $invitedUserSponsors;
        return $this;
    }

}
