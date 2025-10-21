<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTeamsMessageEvidence
 */
class SecurityTeamsMessageEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?string $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?string $verdict = null,
        /** The identifier of the campaign that this Teams message is part of. */
        public ?string $campaignId = null,
        /** The channel ID associated with this Teams message. */
        public ?string $channelId = null,
        /** The delivery action of this Teams message. Possible values are: unknown, deliveredAsSpam, delivered, blocked, replaced, unknownFutureValue. */
        public ?string $deliveryAction = null,
        /** The delivery location of this Teams message. Possible values are: unknown, teams, quarantine, failed, unknownFutureValue. */
        public ?string $deliveryLocation = null,
        /** The list of file entities that are attached to this Teams message. */
        public array $files = [],
        /** The identifier of the team or group that this message is part of. */
        public ?string $groupId = null,
        /** Indicates whether the message is owned by the organization that reported the security detection alert. */
        public ?bool $isExternal = null,
        /** Indicates whether the message is owned by your organization. */
        public ?bool $isOwned = null,
        /** Date and time when the message was last edited. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The direction of the Teams message. The possible values are: unknown, inbound, outbound, intraorg, unknownFutureValue. */
        public ?string $messageDirection = null,
        /** Message identifier unique within the thread. */
        public ?string $messageId = null,
        /** Tenant ID (GUID) of the owner of the message. */
        public ?string $owningTenantId = null,
        /** Identifier of the message to which the current message is a reply; otherwise, it''s the same as the messageId. */
        public ?string $parentMessageId = null,
        /** The received date of this message. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $receivedDateTime = null,
        /** @var string[] The recipients of this Teams message. */
        public array $recipients = [],
        /** The SMTP format address of the sender. */
        public ?string $senderFromAddress = null,
        /** The IP address of the sender. */
        public ?string $senderIP = null,
        /** Source of the message; for example, desktop and mobile. */
        public ?string $sourceAppName = null,
        /** The source ID of this Teams message. */
        public ?string $sourceId = null,
        /** The subject of this Teams message. */
        public ?string $subject = null,
        /** @var string[] The list of recipients who were detected as suspicious. */
        public array $suspiciousRecipients = [],
        /** Identifier of the channel or chat that this message is part of. */
        public ?string $threadId = null,
        /** The Teams message type. Supported values are: Chat, Topic, Space, and Meeting. */
        public ?string $threadType = null,
        /** @var string[] The URLs contained in this Teams message. */
        public array $urls = []
    ) {}
}
