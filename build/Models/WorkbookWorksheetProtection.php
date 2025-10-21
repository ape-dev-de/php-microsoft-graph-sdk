<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtection
 */
class WorkbookWorksheetProtection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Worksheet protection options. Read-only. */
        public ?string $options = null,
        /** Indicates whether the worksheet is protected.  Read-only. */
        public ?bool $protected = null
    ) {}
}
