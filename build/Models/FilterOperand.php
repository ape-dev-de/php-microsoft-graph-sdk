<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperand
 */
class FilterOperand
{
    public function __construct(
        /** @var string[] Collection of values. */
        public array $values = []
    ) {}
}
