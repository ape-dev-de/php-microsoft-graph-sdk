<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightValueInt
 */
class InsightValueInt
{
    public function __construct(
        /** The int value of the user experience analytics insight. */
        public ?float $value = null
    ) {}
}
