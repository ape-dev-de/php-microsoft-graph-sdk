<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryScheduleSettings resources
 *
 * Available select fields:
 * - recurrence
 * - reportRange
 */
class AccessReviewHistoryScheduleSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryScheduleSettings
     */
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_REPORT_RANGE = 'reportRange';

    /**
     * Select specific AccessReviewHistoryScheduleSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
