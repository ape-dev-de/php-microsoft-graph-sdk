<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryScheduleSettings
 */
class AccessReviewHistoryScheduleSettings
{
    public function __construct(
        /**  */
        public ?string $recurrence = null,
        /** A duration string in ISO 8601 duration format specifying the lookback period of the generated review history data. For example, if a history definition is scheduled to run on the first of every month, the reportRange is P1M. In this case, on the first of every month, access review history data is collected containing only the previous month's review data. Note: Only years, months, and days ISO 8601 properties are supported. Required. */
        public ?string $reportRange = null
    ) {}
}
