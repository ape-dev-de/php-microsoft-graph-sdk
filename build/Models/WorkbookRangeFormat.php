<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFormat
 */
class WorkbookRangeFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The width of all columns within the range. If the column widths aren't uniform, null will be returned. */
        public ?string $columnWidth = null,
        /** The horizontal alignment for the specified object. Possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed. */
        public ?string $horizontalAlignment = null,
        /** The height of all rows in the range. If the row heights aren't uniform null will be returned. */
        public ?string $rowHeight = null,
        /** The vertical alignment for the specified object. Possible values are: Top, Center, Bottom, Justify, Distributed. */
        public ?string $verticalAlignment = null,
        /** Indicates whether Excel wraps the text in the object. A null value indicates that the entire range doesn't have a uniform wrap setting. */
        public ?bool $wrapText = null,
        /** Collection of border objects that apply to the overall range selected Read-only. */
        public array $borders = [],
        /** Returns the fill object defined on the overall range. Read-only. */
        public ?string $fill = null,
        /** Returns the font object defined on the overall range selected Read-only. */
        public ?string $font = null,
        /** Returns the format protection object for a range. Read-only. */
        public ?string $protection = null
    ) {}
}
