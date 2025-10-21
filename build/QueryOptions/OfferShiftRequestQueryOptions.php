<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OfferShiftRequest resources
 *
 * Available select fields:
 * - recipientActionDateTime
 * - recipientActionMessage
 * - recipientUserId
 * - senderShiftId
 */
class OfferShiftRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OfferShiftRequest
     */
    public const FIELD_RECIPIENT_ACTION_DATE_TIME = 'recipientActionDateTime';
    public const FIELD_RECIPIENT_ACTION_MESSAGE = 'recipientActionMessage';
    public const FIELD_RECIPIENT_USER_ID = 'recipientUserId';
    public const FIELD_SENDER_SHIFT_ID = 'senderShiftId';

    /**
     * Select specific OfferShiftRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
