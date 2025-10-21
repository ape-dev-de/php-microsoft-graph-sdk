<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CoachmarkLocation
 */
class CoachmarkLocation
{
    public function __construct(
        /** Length of coachmark. */
        public ?float $length = null,
        /** Offset of coachmark. */
        public ?float $offset = null,
        /** Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue. */
        public ?CoachmarkLocationType $type = null
    ) {}
}
