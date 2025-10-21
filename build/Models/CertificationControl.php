<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificationControl
 */
class CertificationControl
{
    public function __construct(
        /** Certification control name */
        public ?string $name = null,
        /** URL for the Microsoft Service Trust Portal */
        public ?string $url = null
    ) {}
}
