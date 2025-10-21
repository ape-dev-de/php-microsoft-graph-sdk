<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Report
 */
class Report
{
    public function __construct(
        /** Device Configuration profile History reports. */
        public ?string $content = null
    ) {}
}
