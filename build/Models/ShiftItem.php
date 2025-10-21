<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftItem
 */
class ShiftItem
{
    public function __construct(
        /**  */
        public ?\DateTimeInterface $endDateTime = null,
        /**  */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $theme = null,
        /** An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required. */
        public array $activities = [],
        /** The shift label of the shiftItem. */
        public ?string $displayName = null,
        /** The shift notes for the shiftItem. */
        public ?string $notes = null
    ) {}
}
