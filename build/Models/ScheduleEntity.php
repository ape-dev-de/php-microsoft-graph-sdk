<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleEntity
 */
class ScheduleEntity
{
    /**  */
    public ?\DateTimeInterface $endDateTime = null;

    /**  */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?ScheduleEntityTheme $theme = null;


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
    }
}
