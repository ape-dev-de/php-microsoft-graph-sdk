<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAutonomousSystem
 */
class SecurityAutonomousSystem
{
    public function __construct(
        /** The name of the autonomous system. */
        public ?string $name = null,
        /** The autonomous system number, assigned by IANA. */
        public ?float $number = null,
        /** The name of the autonomous system organization. */
        public ?string $organization = null,
        /** A displayable value for these autonomous system details. */
        public ?string $value = null
    ) {}
}
