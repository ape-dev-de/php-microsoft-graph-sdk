<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailTips
 */
class MailTips
{
    /**
     * Mail tips for automatic reply if it has been set up by the recipient.
     */
    private ?string $automaticReplies;

    /**
     * A custom mail tip that can be set on the recipient's mailbox.
     */
    private ?string $customMailTip;

    /**
     * Whether the recipient''s mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
     */
    private ?bool $deliveryRestricted;

    /**
     * The email address of the recipient to get mailtips for.
     */
    private ?string $emailAddress;

    /**
     * Errors that occur during the getMailTips action.
     */
    private ?string $error;

    /**
     * The number of external members if the recipient is a distribution list.
     */
    private ?float $externalMemberCount;

    /**
     * Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient''s manager.
     */
    private ?bool $isModerated;

    /**
     * The mailbox full status of the recipient.
     */
    private ?bool $mailboxFull;

    /**
     * The maximum message size that has been configured for the recipient's organization or mailbox.
     */
    private ?float $maxMessageSize;

    /**
     * The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its ''partner''. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It''s also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     */
    private ?string $recipientScope;

    /**
     * Recipients suggested based on previous contexts where they appear in the same message.
     */
    private array $recipientSuggestions = [];

    /**
     * The number of members if the recipient is a distribution list.
     */
    private ?string $totalMemberCount;

    public function getAutomaticReplies(): ?string
    {
        return $this->automaticReplies;
    }

    public function setAutomaticReplies(?string $automaticReplies): self
    {
        $this->automaticReplies = $automaticReplies;
        return $this;
    }

    public function getCustomMailTip(): ?string
    {
        return $this->customMailTip;
    }

    public function setCustomMailTip(?string $customMailTip): self
    {
        $this->customMailTip = $customMailTip;
        return $this;
    }

    public function getDeliveryRestricted(): ?bool
    {
        return $this->deliveryRestricted;
    }

    public function setDeliveryRestricted(?bool $deliveryRestricted): self
    {
        $this->deliveryRestricted = $deliveryRestricted;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getExternalMemberCount(): ?float
    {
        return $this->externalMemberCount;
    }

    public function setExternalMemberCount(?float $externalMemberCount): self
    {
        $this->externalMemberCount = $externalMemberCount;
        return $this;
    }

    public function getIsModerated(): ?bool
    {
        return $this->isModerated;
    }

    public function setIsModerated(?bool $isModerated): self
    {
        $this->isModerated = $isModerated;
        return $this;
    }

    public function getMailboxFull(): ?bool
    {
        return $this->mailboxFull;
    }

    public function setMailboxFull(?bool $mailboxFull): self
    {
        $this->mailboxFull = $mailboxFull;
        return $this;
    }

    public function getMaxMessageSize(): ?float
    {
        return $this->maxMessageSize;
    }

    public function setMaxMessageSize(?float $maxMessageSize): self
    {
        $this->maxMessageSize = $maxMessageSize;
        return $this;
    }

    public function getRecipientScope(): ?string
    {
        return $this->recipientScope;
    }

    public function setRecipientScope(?string $recipientScope): self
    {
        $this->recipientScope = $recipientScope;
        return $this;
    }

    public function getRecipientSuggestions(): array
    {
        return $this->recipientSuggestions;
    }

    public function setRecipientSuggestions(array $recipientSuggestions): self
    {
        $this->recipientSuggestions = $recipientSuggestions;
        return $this;
    }

    public function getTotalMemberCount(): ?string
    {
        return $this->totalMemberCount;
    }

    public function setTotalMemberCount(?string $totalMemberCount): self
    {
        $this->totalMemberCount = $totalMemberCount;
        return $this;
    }

}
