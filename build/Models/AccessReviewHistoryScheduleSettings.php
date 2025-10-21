<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryScheduleSettings
 */
class AccessReviewHistoryScheduleSettings
{
    /**
     */
    private ?string $recurrence;

    /**
     * A duration string in ISO 8601 duration format specifying the lookback period of the generated review history data. For example, if a history definition is scheduled to run on the first of every month, the reportRange is P1M. In this case, on the first of every month, access review history data is collected containing only the previous month''s review data. Note: Only years, months, and days ISO 8601 properties are supported. Required.
     */
    private ?string $reportRange;


    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getReportRange(): ?string
    {
        return $this->reportRange;
    }

    public function setReportRange(?string $reportRange): self
    {
        $this->reportRange = $reportRange;
        return $this;
    }

}
