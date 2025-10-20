<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageSecurityState resources
 *
 * Available select fields:
 * - connectingIP
 * - deliveryAction
 * - deliveryLocation
 * - directionality
 * - internetMessageId
 * - messageFingerprint
 * - messageReceivedDateTime
 * - messageSubject
 * - networkMessageId
 */
class MessageSecurityStateQueryOptions extends QueryOptions
{
    public const FIELD_CONNECTING_IP = 'connectingIP';
    public const FIELD_DELIVERY_ACTION = 'deliveryAction';
    public const FIELD_DELIVERY_LOCATION = 'deliveryLocation';
    public const FIELD_DIRECTIONALITY = 'directionality';
    public const FIELD_INTERNET_MESSAGE_ID = 'internetMessageId';
    public const FIELD_MESSAGE_FINGERPRINT = 'messageFingerprint';
    public const FIELD_MESSAGE_RECEIVED_DATE_TIME = 'messageReceivedDateTime';
    public const FIELD_MESSAGE_SUBJECT = 'messageSubject';
    public const FIELD_NETWORK_MESSAGE_ID = 'networkMessageId';

    /**
     * Select specific MessageSecurityState properties
     * 
     * @param array<string> $select Use MessageSecurityStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
