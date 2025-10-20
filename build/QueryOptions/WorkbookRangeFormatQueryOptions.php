<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFormat resources
 *
 * Available select fields:
 * - columnWidth
 * - horizontalAlignment
 * - rowHeight
 * - verticalAlignment
 * - wrapText
 * - borders
 * - fill
 * - font
 * - protection
 */
class WorkbookRangeFormatQueryOptions extends QueryOptions
{
    public const FIELD_COLUMN_WIDTH = 'columnWidth';
    public const FIELD_HORIZONTAL_ALIGNMENT = 'horizontalAlignment';
    public const FIELD_ROW_HEIGHT = 'rowHeight';
    public const FIELD_VERTICAL_ALIGNMENT = 'verticalAlignment';
    public const FIELD_WRAP_TEXT = 'wrapText';
    public const FIELD_BORDERS = 'borders';
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';
    public const FIELD_PROTECTION = 'protection';

    /**
     * Select specific WorkbookRangeFormat properties
     * 
     * @param array<string> $select Use WorkbookRangeFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
