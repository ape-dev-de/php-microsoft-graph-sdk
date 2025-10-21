<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilter
 */
class WorkbookFilter
{
    public function __construct(
        /** The currently applied filter on the given column. Read-only. */
        public ?string $criteria = null
    ) {}
}
