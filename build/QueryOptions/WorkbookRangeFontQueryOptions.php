<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFont resources
 *
 * Available select fields:
 * - bold
 * - color
 * - italic
 * - name
 * - size
 * - underline
 */
class WorkbookRangeFontQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeFont
     */
    public const FIELD_BOLD = 'bold';
    public const FIELD_COLOR = 'color';
    public const FIELD_ITALIC = 'italic';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';
    public const FIELD_UNDERLINE = 'underline';

    /**
     * Select specific WorkbookRangeFont properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
