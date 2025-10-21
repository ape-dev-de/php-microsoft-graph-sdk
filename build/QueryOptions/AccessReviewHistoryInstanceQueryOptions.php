<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryInstance resources
 *
 * Available select fields:
 * - downloadUri
 * - expirationDateTime
 * - fulfilledDateTime
 * - reviewHistoryPeriodEndDateTime
 * - reviewHistoryPeriodStartDateTime
 * - runDateTime
 * - status
 */
class AccessReviewHistoryInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryInstance
     */
    public const FIELD_DOWNLOAD_URI = 'downloadUri';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_FULFILLED_DATE_TIME = 'fulfilledDateTime';
    public const FIELD_REVIEW_HISTORY_PERIOD_END_DATE_TIME = 'reviewHistoryPeriodEndDateTime';
    public const FIELD_REVIEW_HISTORY_PERIOD_START_DATE_TIME = 'reviewHistoryPeriodStartDateTime';
    public const FIELD_RUN_DATE_TIME = 'runDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific AccessReviewHistoryInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
