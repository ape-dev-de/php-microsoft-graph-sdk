<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffItem
 */
class TimeOffItem
{
    /**  */
    public ?\DateTimeInterface $endDateTime = null;

    /**  */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?ScheduleEntityTheme $theme = null;

    /** ID of the timeOffReason for this timeOffItem. Required. */
    public ?string $timeOffReasonId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['endDateTime'])) {
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['theme'])) {
            $this->theme = $data['theme'];
        }
        if (isset($data['timeOffReasonId'])) {
            $this->timeOffReasonId = $data['timeOffReasonId'];
        }
    }
}
