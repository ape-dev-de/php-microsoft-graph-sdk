<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleEntity
 */
class ScheduleEntity
{
    public function __construct(
        /**  */
        public ?\DateTimeInterface $endDateTime = null,
        /**  */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?ScheduleEntityTheme $theme = null
    ) {}
}
