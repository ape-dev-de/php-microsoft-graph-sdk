<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningSelfInitiatedCourse
 */
class LearningSelfInitiatedCourse
{
    public function __construct(
        /** The date and time on which the learner started the self-initiated course. Optional. */
        public ?\DateTimeInterface $startedDateTime = null
    ) {}
}
