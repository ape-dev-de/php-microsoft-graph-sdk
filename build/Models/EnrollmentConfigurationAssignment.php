<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentConfigurationAssignment
 */
class EnrollmentConfigurationAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Enrollment Configuration Assignment */
        public ?string $target = null
    ) {}
}
