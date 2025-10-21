<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableSort
 */
class WorkbookTableSort
{
    public function __construct(
        /** The list of the current conditions last used to sort the table. Read-only. */
        public array $fields = [],
        /** Indicates whether the casing impacted the last sort of the table. Read-only. */
        public ?bool $matchCase = null,
        /** The Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only. */
        public ?string $method = null
    ) {}
}
