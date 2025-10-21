<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperatingSystemSpecifications
 */
class OperatingSystemSpecifications
{
    public function __construct(
        /** The platform of the operating system (for example, ''Windows''). */
        public ?string $operatingSystemPlatform = null,
        /** The version string of the operating system. */
        public ?string $operatingSystemVersion = null
    ) {}
}
