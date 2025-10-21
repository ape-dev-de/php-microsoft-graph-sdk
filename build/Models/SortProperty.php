<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SortProperty
 */
class SortProperty
{
    public function __construct(
        /** True if the sort order is descending. Default is false, with the sort order as ascending. Optional. */
        public ?bool $isDescending = null,
        /** The name of the property to sort on. Required. */
        public ?string $name = null
    ) {}
}
