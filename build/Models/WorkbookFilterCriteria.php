<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilterCriteria
 */
class WorkbookFilterCriteria
{
    public function __construct(
        /** The color applied to the cell. */
        public ?string $color = null,
        /** A custom criterion. */
        public ?string $criterion1 = null,
        /** A custom criterion. */
        public ?string $criterion2 = null,
        /** A dynamic formula specified in a custom filter. */
        public ?string $dynamicCriteria = null,
        /** Indicates whether a filter is applied to a column. */
        public ?string $filterOn = null,
        /** An icon applied to a cell via conditional formatting. */
        public ?string $icon = null,
        /** An operator in a cell; for example, =, >, <, <=, or <>. */
        public ?string $operator = null,
        /** The values that appear in the cell. */
        public ?string $values = null
    ) {}
}
