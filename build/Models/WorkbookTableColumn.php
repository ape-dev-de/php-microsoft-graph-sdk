<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableColumn
 */
class WorkbookTableColumn
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The index of the column within the columns collection of the table. Zero-indexed. Read-only. */
        public ?float $index = null,
        /** The name of the table column. */
        public ?string $name = null,
        /** TRepresents the raw values of the specified range. The data returned could be of type string, number, or a Boolean. Cell that contain an error will return the error string. */
        public ?string $values = null,
        /** The filter applied to the column. Read-only. */
        public ?WorkbookFilter $filter = null
    ) {}
}
