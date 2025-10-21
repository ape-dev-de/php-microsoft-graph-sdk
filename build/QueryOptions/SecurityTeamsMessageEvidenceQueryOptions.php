<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTeamsMessageEvidence resources
 *
 * Available select fields:
 * - campaignId
 * - channelId
 * - deliveryAction
 * - deliveryLocation
 * - files
 * - groupId
 * - isExternal
 * - isOwned
 * - lastModifiedDateTime
 * - messageDirection
 * - messageId
 * - owningTenantId
 * - parentMessageId
 * - receivedDateTime
 * - recipients
 * - senderFromAddress
 * - senderIP
 * - sourceAppName
 * - sourceId
 * - subject
 * - suspiciousRecipients
 * - threadId
 * - threadType
 * - urls
 */
class SecurityTeamsMessageEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTeamsMessageEvidence
     */
    public const FIELD_CAMPAIGN_ID = 'campaignId';
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_DELIVERY_ACTION = 'deliveryAction';
    public const FIELD_DELIVERY_LOCATION = 'deliveryLocation';
    public const FIELD_FILES = 'files';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_IS_EXTERNAL = 'isExternal';
    public const FIELD_IS_OWNED = 'isOwned';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MESSAGE_DIRECTION = 'messageDirection';
    public const FIELD_MESSAGE_ID = 'messageId';
    public const FIELD_OWNING_TENANT_ID = 'owningTenantId';
    public const FIELD_PARENT_MESSAGE_ID = 'parentMessageId';
    public const FIELD_RECEIVED_DATE_TIME = 'receivedDateTime';
    public const FIELD_RECIPIENTS = 'recipients';
    public const FIELD_SENDER_FROM_ADDRESS = 'senderFromAddress';
    public const FIELD_SENDER_IP = 'senderIP';
    public const FIELD_SOURCE_APP_NAME = 'sourceAppName';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_SUSPICIOUS_RECIPIENTS = 'suspiciousRecipients';
    public const FIELD_THREAD_ID = 'threadId';
    public const FIELD_THREAD_TYPE = 'threadType';
    public const FIELD_URLS = 'urls';

    /**
     * Select specific SecurityTeamsMessageEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
