<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftItem
 */
class OpenShiftItem
{
    /**  */
    public ?\DateTimeInterface $endDateTime = null;

    /**  */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?ScheduleEntityTheme $theme = null;

    /** 
     * An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
     * @var ShiftActivity[]
     */
    public array $activities = [];

    /** The shift label of the shiftItem. */
    public ?string $displayName = null;

    /** The shift notes for the shiftItem. */
    public ?string $notes = null;

    /** Count of the number of slots for the given open shift. */
    public ?float $openSlotCount = null;


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
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['openSlotCount'])) {
            $this->openSlotCount = $data['openSlotCount'];
        }
    }
}
