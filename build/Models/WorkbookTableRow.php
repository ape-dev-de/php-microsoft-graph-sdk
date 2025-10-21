<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableRow
 */
class WorkbookTableRow
{
    public function __construct(
        /** The index of the row within the rows collection of the table. Zero-based. Read-only. */
        public ?float $index = null,
        /** The raw values of the specified range. The data returned could be of type string, number, or a Boolean. Any cell that contain an error will return the error string. */
        public ?string $values = null
    ) {}
}
