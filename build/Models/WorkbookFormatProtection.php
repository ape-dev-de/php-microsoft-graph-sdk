<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFormatProtection
 */
class WorkbookFormatProtection
{
    public function __construct(
        /** Indicates whether Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting. */
        public ?bool $formulaHidden = null,
        /** Indicates whether Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting. */
        public ?string $locked = null
    ) {}
}
