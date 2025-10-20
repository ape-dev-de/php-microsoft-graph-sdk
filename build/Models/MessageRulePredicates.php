<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRulePredicates
 */
class MessageRulePredicates
{
    /**
     * Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     */
    private ?string $bodyContains;

    /**
     * Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     */
    private ?string $bodyOrSubjectContains;

    /**
     * Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     */
    private ?string $categories;

    /**
     * Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     */
    private array $fromAddresses = [];

    /**
     * Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
     */
    private ?bool $hasAttachments;

    /**
     * Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     */
    private ?string $headerContains;

    /**
     * The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     */
    private ?string $importance;

    /**
     * Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
     */
    private ?bool $isApprovalRequest;

    /**
     * Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
     */
    private ?bool $isAutomaticForward;

    /**
     * Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
     */
    private ?bool $isAutomaticReply;

    /**
     * Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
     */
    private ?bool $isEncrypted;

    /**
     * Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
     */
    private ?bool $isMeetingRequest;

    /**
     * Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
     */
    private ?bool $isMeetingResponse;

    /**
     * Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
     */
    private ?bool $isNonDeliveryReport;

    /**
     * Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
     */
    private ?bool $isPermissionControlled;

    /**
     * Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
     */
    private ?bool $isReadReceipt;

    /**
     * Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
     */
    private ?bool $isSigned;

    /**
     * Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
     */
    private ?bool $isVoicemail;

    /**
     * Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     */
    private ?string $messageActionFlag;

    /**
     * Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
     */
    private ?bool $notSentToMe;

    /**
     * Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     */
    private ?string $recipientContains;

    /**
     * Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     */
    private ?string $senderContains;

    /**
     * Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     */
    private ?string $sensitivity;

    /**
     * Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
     */
    private ?bool $sentCcMe;

    /**
     * Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
     */
    private ?bool $sentOnlyToMe;

    /**
     * Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     */
    private array $sentToAddresses = [];

    /**
     * Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
     */
    private ?bool $sentToMe;

    /**
     * Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
     */
    private ?bool $sentToOrCcMe;

    /**
     * Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     */
    private ?string $subjectContains;

    /**
     * Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     */
    private ?string $withinSizeRange;

    public function getBodyContains(): ?string
    {
        return $this->bodyContains;
    }

    public function setBodyContains(?string $bodyContains): self
    {
        $this->bodyContains = $bodyContains;
        return $this;
    }

    public function getBodyOrSubjectContains(): ?string
    {
        return $this->bodyOrSubjectContains;
    }

    public function setBodyOrSubjectContains(?string $bodyOrSubjectContains): self
    {
        $this->bodyOrSubjectContains = $bodyOrSubjectContains;
        return $this;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(?string $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getFromAddresses(): array
    {
        return $this->fromAddresses;
    }

    public function setFromAddresses(array $fromAddresses): self
    {
        $this->fromAddresses = $fromAddresses;
        return $this;
    }

    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    public function setHasAttachments(?bool $hasAttachments): self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    public function getHeaderContains(): ?string
    {
        return $this->headerContains;
    }

    public function setHeaderContains(?string $headerContains): self
    {
        $this->headerContains = $headerContains;
        return $this;
    }

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getIsApprovalRequest(): ?bool
    {
        return $this->isApprovalRequest;
    }

    public function setIsApprovalRequest(?bool $isApprovalRequest): self
    {
        $this->isApprovalRequest = $isApprovalRequest;
        return $this;
    }

    public function getIsAutomaticForward(): ?bool
    {
        return $this->isAutomaticForward;
    }

    public function setIsAutomaticForward(?bool $isAutomaticForward): self
    {
        $this->isAutomaticForward = $isAutomaticForward;
        return $this;
    }

    public function getIsAutomaticReply(): ?bool
    {
        return $this->isAutomaticReply;
    }

    public function setIsAutomaticReply(?bool $isAutomaticReply): self
    {
        $this->isAutomaticReply = $isAutomaticReply;
        return $this;
    }

    public function getIsEncrypted(): ?bool
    {
        return $this->isEncrypted;
    }

    public function setIsEncrypted(?bool $isEncrypted): self
    {
        $this->isEncrypted = $isEncrypted;
        return $this;
    }

    public function getIsMeetingRequest(): ?bool
    {
        return $this->isMeetingRequest;
    }

    public function setIsMeetingRequest(?bool $isMeetingRequest): self
    {
        $this->isMeetingRequest = $isMeetingRequest;
        return $this;
    }

    public function getIsMeetingResponse(): ?bool
    {
        return $this->isMeetingResponse;
    }

    public function setIsMeetingResponse(?bool $isMeetingResponse): self
    {
        $this->isMeetingResponse = $isMeetingResponse;
        return $this;
    }

    public function getIsNonDeliveryReport(): ?bool
    {
        return $this->isNonDeliveryReport;
    }

    public function setIsNonDeliveryReport(?bool $isNonDeliveryReport): self
    {
        $this->isNonDeliveryReport = $isNonDeliveryReport;
        return $this;
    }

    public function getIsPermissionControlled(): ?bool
    {
        return $this->isPermissionControlled;
    }

    public function setIsPermissionControlled(?bool $isPermissionControlled): self
    {
        $this->isPermissionControlled = $isPermissionControlled;
        return $this;
    }

    public function getIsReadReceipt(): ?bool
    {
        return $this->isReadReceipt;
    }

    public function setIsReadReceipt(?bool $isReadReceipt): self
    {
        $this->isReadReceipt = $isReadReceipt;
        return $this;
    }

    public function getIsSigned(): ?bool
    {
        return $this->isSigned;
    }

    public function setIsSigned(?bool $isSigned): self
    {
        $this->isSigned = $isSigned;
        return $this;
    }

    public function getIsVoicemail(): ?bool
    {
        return $this->isVoicemail;
    }

    public function setIsVoicemail(?bool $isVoicemail): self
    {
        $this->isVoicemail = $isVoicemail;
        return $this;
    }

    public function getMessageActionFlag(): ?string
    {
        return $this->messageActionFlag;
    }

    public function setMessageActionFlag(?string $messageActionFlag): self
    {
        $this->messageActionFlag = $messageActionFlag;
        return $this;
    }

    public function getNotSentToMe(): ?bool
    {
        return $this->notSentToMe;
    }

    public function setNotSentToMe(?bool $notSentToMe): self
    {
        $this->notSentToMe = $notSentToMe;
        return $this;
    }

    public function getRecipientContains(): ?string
    {
        return $this->recipientContains;
    }

    public function setRecipientContains(?string $recipientContains): self
    {
        $this->recipientContains = $recipientContains;
        return $this;
    }

    public function getSenderContains(): ?string
    {
        return $this->senderContains;
    }

    public function setSenderContains(?string $senderContains): self
    {
        $this->senderContains = $senderContains;
        return $this;
    }

    public function getSensitivity(): ?string
    {
        return $this->sensitivity;
    }

    public function setSensitivity(?string $sensitivity): self
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    public function getSentCcMe(): ?bool
    {
        return $this->sentCcMe;
    }

    public function setSentCcMe(?bool $sentCcMe): self
    {
        $this->sentCcMe = $sentCcMe;
        return $this;
    }

    public function getSentOnlyToMe(): ?bool
    {
        return $this->sentOnlyToMe;
    }

    public function setSentOnlyToMe(?bool $sentOnlyToMe): self
    {
        $this->sentOnlyToMe = $sentOnlyToMe;
        return $this;
    }

    public function getSentToAddresses(): array
    {
        return $this->sentToAddresses;
    }

    public function setSentToAddresses(array $sentToAddresses): self
    {
        $this->sentToAddresses = $sentToAddresses;
        return $this;
    }

    public function getSentToMe(): ?bool
    {
        return $this->sentToMe;
    }

    public function setSentToMe(?bool $sentToMe): self
    {
        $this->sentToMe = $sentToMe;
        return $this;
    }

    public function getSentToOrCcMe(): ?bool
    {
        return $this->sentToOrCcMe;
    }

    public function setSentToOrCcMe(?bool $sentToOrCcMe): self
    {
        $this->sentToOrCcMe = $sentToOrCcMe;
        return $this;
    }

    public function getSubjectContains(): ?string
    {
        return $this->subjectContains;
    }

    public function setSubjectContains(?string $subjectContains): self
    {
        $this->subjectContains = $subjectContains;
        return $this;
    }

    public function getWithinSizeRange(): ?string
    {
        return $this->withinSizeRange;
    }

    public function setWithinSizeRange(?string $withinSizeRange): self
    {
        $this->withinSizeRange = $withinSizeRange;
        return $this;
    }

}
