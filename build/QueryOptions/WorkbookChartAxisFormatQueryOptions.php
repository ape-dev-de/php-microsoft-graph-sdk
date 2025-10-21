<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxisFormat resources
 *
 * Available select fields:
 * - font
 * - line
 */
class WorkbookChartAxisFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxisFormat
     */
    public const FIELD_FONT = 'font';
    public const FIELD_LINE = 'line';

    /**
     * Select specific WorkbookChartAxisFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
