<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilter
 */
class WorkbookFilter
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The currently applied filter on the given column. Read-only. */
        public ?WorkbookFilterCriteria $criteria = null
    ) {}
}
