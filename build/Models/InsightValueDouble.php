<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightValueDouble
 */
class InsightValueDouble
{
    public function __construct(
        /** The double value of the user experience analytics insight. */
        public ?string $value = null
    ) {}
}
