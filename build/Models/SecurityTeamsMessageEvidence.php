<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTeamsMessageEvidence
 */
class SecurityTeamsMessageEvidence
{
    /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Detailed description of the entity role/s in an alert. Values are free-form.
     * @var string[]
     */
    public array $detailedRoles = [];

    /**  */
    public ?SecurityEvidenceRemediationStatus $remediationStatus = null;

    /** Details about the remediation status. */
    public ?string $remediationStatusDetails = null;

    /** 
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @var SecurityEvidenceRole[]
     */
    public array $roles = [];

    /** 
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @var string[]
     */
    public array $tags = [];

    /**  */
    public ?SecurityEvidenceVerdict $verdict = null;

    /** The identifier of the campaign that this Teams message is part of. */
    public ?string $campaignId = null;

    /** The channel ID associated with this Teams message. */
    public ?string $channelId = null;

    /** 
     * The delivery action of this Teams message. Possible values are: unknown, deliveredAsSpam, delivered, blocked, replaced, unknownFutureValue.
     * @var SecurityTeamsMessageDeliveryAction|\stdClass|null
     */
    public mixed $deliveryAction = null;

    /** 
     * The delivery location of this Teams message. Possible values are: unknown, teams, quarantine, failed, unknownFutureValue.
     * @var SecurityTeamsDeliveryLocation|\stdClass|null
     */
    public mixed $deliveryLocation = null;

    /** 
     * The list of file entities that are attached to this Teams message.
     * @var SecurityFileEvidence[]
     */
    public array $files = [];

    /** The identifier of the team or group that this message is part of. */
    public ?string $groupId = null;

    /** Indicates whether the message is owned by the organization that reported the security detection alert. */
    public ?bool $isExternal = null;

    /** Indicates whether the message is owned by your organization. */
    public ?bool $isOwned = null;

    /** Date and time when the message was last edited. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The direction of the Teams message. The possible values are: unknown, inbound, outbound, intraorg, unknownFutureValue.
     * @var SecurityAntispamTeamsDirection|\stdClass|null
     */
    public mixed $messageDirection = null;

    /** Message identifier unique within the thread. */
    public ?string $messageId = null;

    /** Tenant ID (GUID) of the owner of the message. */
    public ?string $owningTenantId = null;

    /** Identifier of the message to which the current message is a reply; otherwise, it's the same as the messageId. */
    public ?string $parentMessageId = null;

    /** The received date of this message. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $receivedDateTime = null;

    /** 
     * The recipients of this Teams message.
     * @var string[]
     */
    public array $recipients = [];

    /** The SMTP format address of the sender. */
    public ?string $senderFromAddress = null;

    /** The IP address of the sender. */
    public ?string $senderIP = null;

    /** Source of the message; for example, desktop and mobile. */
    public ?string $sourceAppName = null;

    /** The source ID of this Teams message. */
    public ?string $sourceId = null;

    /** The subject of this Teams message. */
    public ?string $subject = null;

    /** 
     * The list of recipients who were detected as suspicious.
     * @var string[]
     */
    public array $suspiciousRecipients = [];

    /** Identifier of the channel or chat that this message is part of. */
    public ?string $threadId = null;

    /** The Teams message type. Supported values are: Chat, Topic, Space, and Meeting. */
    public ?string $threadType = null;

    /** 
     * The URLs contained in this Teams message.
     * @var SecurityUrlEvidence[]
     */
    public array $urls = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = $data['remediationStatus'];
        }
        if (isset($data['remediationStatusDetails'])) {
            $this->remediationStatusDetails = $data['remediationStatusDetails'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = $data['verdict'];
        }
        if (isset($data['campaignId'])) {
            $this->campaignId = $data['campaignId'];
        }
        if (isset($data['channelId'])) {
            $this->channelId = $data['channelId'];
        }
        if (isset($data['deliveryAction'])) {
            $this->deliveryAction = $data['deliveryAction'];
        }
        if (isset($data['deliveryLocation'])) {
            $this->deliveryLocation = $data['deliveryLocation'];
        }
        if (isset($data['files'])) {
            $this->files = $data['files'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['isExternal'])) {
            $this->isExternal = $data['isExternal'];
        }
        if (isset($data['isOwned'])) {
            $this->isOwned = $data['isOwned'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['messageDirection'])) {
            $this->messageDirection = $data['messageDirection'];
        }
        if (isset($data['messageId'])) {
            $this->messageId = $data['messageId'];
        }
        if (isset($data['owningTenantId'])) {
            $this->owningTenantId = $data['owningTenantId'];
        }
        if (isset($data['parentMessageId'])) {
            $this->parentMessageId = $data['parentMessageId'];
        }
        if (isset($data['receivedDateTime'])) {
            $this->receivedDateTime = $data['receivedDateTime'];
        }
        if (isset($data['recipients'])) {
            $this->recipients = $data['recipients'];
        }
        if (isset($data['senderFromAddress'])) {
            $this->senderFromAddress = $data['senderFromAddress'];
        }
        if (isset($data['senderIP'])) {
            $this->senderIP = $data['senderIP'];
        }
        if (isset($data['sourceAppName'])) {
            $this->sourceAppName = $data['sourceAppName'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['suspiciousRecipients'])) {
            $this->suspiciousRecipients = $data['suspiciousRecipients'];
        }
        if (isset($data['threadId'])) {
            $this->threadId = $data['threadId'];
        }
        if (isset($data['threadType'])) {
            $this->threadType = $data['threadType'];
        }
        if (isset($data['urls'])) {
            $this->urls = $data['urls'];
        }
    }
}
