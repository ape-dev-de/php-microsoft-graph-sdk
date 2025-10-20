<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffItem
 */
class TimeOffItem
{
    /**
     * ID of the timeOffReason for this timeOffItem. Required.
     */
    private ?string $timeOffReasonId;

    public function getTimeOffReasonId(): ?string
    {
        return $this->timeOffReasonId;
    }

    public function setTimeOffReasonId(?string $timeOffReasonId): self
    {
        $this->timeOffReasonId = $timeOffReasonId;
        return $this;
    }

}
