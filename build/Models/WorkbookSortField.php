<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSortField
 */
class WorkbookSortField
{
    public function __construct(
        /** Represents whether the sorting is done in an ascending fashion. */
        public ?bool $ascending = null,
        /** Represents the color that is the target of the condition if the sorting is on font or cell color. */
        public ?string $color = null,
        /** Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber. */
        public ?string $dataOption = null,
        /** Represents the icon that is the target of the condition if the sorting is on the cell's icon. */
        public ?WorkbookIcon $icon = null,
        /** Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row). */
        public ?float $key = null,
        /** Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon. */
        public ?string $sortOn = null
    ) {}
}
