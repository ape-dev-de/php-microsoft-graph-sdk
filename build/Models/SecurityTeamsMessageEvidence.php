<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTeamsMessageEvidence
 */
class SecurityTeamsMessageEvidence
{
    /**
     * The identifier of the campaign that this Teams message is part of.
     */
    private ?string $campaignId;

    /**
     * The channel ID associated with this Teams message.
     */
    private ?string $channelId;

    /**
     * The delivery action of this Teams message. Possible values are: unknown, deliveredAsSpam, delivered, blocked, replaced, unknownFutureValue.
     */
    private ?string $deliveryAction;

    /**
     * The delivery location of this Teams message. Possible values are: unknown, teams, quarantine, failed, unknownFutureValue.
     */
    private ?string $deliveryLocation;

    /**
     * The list of file entities that are attached to this Teams message.
     */
    private array $files = [];

    /**
     * The identifier of the team or group that this message is part of.
     */
    private ?string $groupId;

    /**
     * Indicates whether the message is owned by the organization that reported the security detection alert.
     */
    private ?bool $isExternal;

    /**
     * Indicates whether the message is owned by your organization.
     */
    private ?bool $isOwned;

    /**
     * Date and time when the message was last edited. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The direction of the Teams message. The possible values are: unknown, inbound, outbound, intraorg, unknownFutureValue.
     */
    private ?string $messageDirection;

    /**
     * Message identifier unique within the thread.
     */
    private ?string $messageId;

    /**
     * Tenant ID (GUID) of the owner of the message.
     */
    private ?string $owningTenantId;

    /**
     * Identifier of the message to which the current message is a reply; otherwise, it''s the same as the messageId.
     */
    private ?string $parentMessageId;

    /**
     * The received date of this message. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $receivedDateTime;

    /**
     * The recipients of this Teams message.
     */
    private ?string $recipients;

    /**
     * The SMTP format address of the sender.
     */
    private ?string $senderFromAddress;

    /**
     * The IP address of the sender.
     */
    private ?string $senderIP;

    /**
     * Source of the message; for example, desktop and mobile.
     */
    private ?string $sourceAppName;

    /**
     * The source ID of this Teams message.
     */
    private ?string $sourceId;

    /**
     * The subject of this Teams message.
     */
    private ?string $subject;

    /**
     * The list of recipients who were detected as suspicious.
     */
    private ?string $suspiciousRecipients;

    /**
     * Identifier of the channel or chat that this message is part of.
     */
    private ?string $threadId;

    /**
     * The Teams message type. Supported values are: Chat, Topic, Space, and Meeting.
     */
    private ?string $threadType;

    /**
     * The URLs contained in this Teams message.
     */
    private ?string $urls;

    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    public function getDeliveryAction(): ?string
    {
        return $this->deliveryAction;
    }

    public function setDeliveryAction(?string $deliveryAction): self
    {
        $this->deliveryAction = $deliveryAction;
        return $this;
    }

    public function getDeliveryLocation(): ?string
    {
        return $this->deliveryLocation;
    }

    public function setDeliveryLocation(?string $deliveryLocation): self
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): self
    {
        $this->isExternal = $isExternal;
        return $this;
    }

    public function getIsOwned(): ?bool
    {
        return $this->isOwned;
    }

    public function setIsOwned(?bool $isOwned): self
    {
        $this->isOwned = $isOwned;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getMessageDirection(): ?string
    {
        return $this->messageDirection;
    }

    public function setMessageDirection(?string $messageDirection): self
    {
        $this->messageDirection = $messageDirection;
        return $this;
    }

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function setMessageId(?string $messageId): self
    {
        $this->messageId = $messageId;
        return $this;
    }

    public function getOwningTenantId(): ?string
    {
        return $this->owningTenantId;
    }

    public function setOwningTenantId(?string $owningTenantId): self
    {
        $this->owningTenantId = $owningTenantId;
        return $this;
    }

    public function getParentMessageId(): ?string
    {
        return $this->parentMessageId;
    }

    public function setParentMessageId(?string $parentMessageId): self
    {
        $this->parentMessageId = $parentMessageId;
        return $this;
    }

    public function getReceivedDateTime(): ?\DateTimeInterface
    {
        return $this->receivedDateTime;
    }

    public function setReceivedDateTime(?\DateTimeInterface $receivedDateTime): self
    {
        $this->receivedDateTime = $receivedDateTime;
        return $this;
    }

    public function getRecipients(): ?string
    {
        return $this->recipients;
    }

    public function setRecipients(?string $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

    public function getSenderFromAddress(): ?string
    {
        return $this->senderFromAddress;
    }

    public function setSenderFromAddress(?string $senderFromAddress): self
    {
        $this->senderFromAddress = $senderFromAddress;
        return $this;
    }

    public function getSenderIP(): ?string
    {
        return $this->senderIP;
    }

    public function setSenderIP(?string $senderIP): self
    {
        $this->senderIP = $senderIP;
        return $this;
    }

    public function getSourceAppName(): ?string
    {
        return $this->sourceAppName;
    }

    public function setSourceAppName(?string $sourceAppName): self
    {
        $this->sourceAppName = $sourceAppName;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getSuspiciousRecipients(): ?string
    {
        return $this->suspiciousRecipients;
    }

    public function setSuspiciousRecipients(?string $suspiciousRecipients): self
    {
        $this->suspiciousRecipients = $suspiciousRecipients;
        return $this;
    }

    public function getThreadId(): ?string
    {
        return $this->threadId;
    }

    public function setThreadId(?string $threadId): self
    {
        $this->threadId = $threadId;
        return $this;
    }

    public function getThreadType(): ?string
    {
        return $this->threadType;
    }

    public function setThreadType(?string $threadType): self
    {
        $this->threadType = $threadType;
        return $this;
    }

    public function getUrls(): ?string
    {
        return $this->urls;
    }

    public function setUrls(?string $urls): self
    {
        $this->urls = $urls;
        return $this;
    }

}
