<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultColumnValue
 */
class DefaultColumnValue
{
    public function __construct(
        /** The formula used to compute the default value for the column. */
        public ?string $formula = null,
        /** The direct value to use as the default value for the column. */
        public ?string $value = null
    ) {}
}
