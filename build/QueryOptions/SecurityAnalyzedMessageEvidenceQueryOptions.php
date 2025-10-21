<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAnalyzedMessageEvidence resources
 *
 * Available select fields:
 * - antiSpamDirection
 * - attachmentsCount
 * - deliveryAction
 * - deliveryLocation
 * - internetMessageId
 * - language
 * - networkMessageId
 * - p1Sender
 * - p2Sender
 * - receivedDateTime
 * - recipientEmailAddress
 * - senderIp
 * - subject
 * - threatDetectionMethods
 * - threats
 * - urlCount
 * - urls
 * - urn
 */
class SecurityAnalyzedMessageEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAnalyzedMessageEvidence
     */
    public const FIELD_ANTI_SPAM_DIRECTION = 'antiSpamDirection';
    public const FIELD_ATTACHMENTS_COUNT = 'attachmentsCount';
    public const FIELD_DELIVERY_ACTION = 'deliveryAction';
    public const FIELD_DELIVERY_LOCATION = 'deliveryLocation';
    public const FIELD_INTERNET_MESSAGE_ID = 'internetMessageId';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_NETWORK_MESSAGE_ID = 'networkMessageId';
    public const FIELD_P1SENDER = 'p1Sender';
    public const FIELD_P2SENDER = 'p2Sender';
    public const FIELD_RECEIVED_DATE_TIME = 'receivedDateTime';
    public const FIELD_RECIPIENT_EMAIL_ADDRESS = 'recipientEmailAddress';
    public const FIELD_SENDER_IP = 'senderIp';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_THREAT_DETECTION_METHODS = 'threatDetectionMethods';
    public const FIELD_THREATS = 'threats';
    public const FIELD_URL_COUNT = 'urlCount';
    public const FIELD_URLS = 'urls';
    public const FIELD_URN = 'urn';

    /**
     * Select specific SecurityAnalyzedMessageEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
