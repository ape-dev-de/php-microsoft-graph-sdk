<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxisTitleFormat resources
 *
 * Available select fields:
 * - font
 */
class WorkbookChartAxisTitleFormatQueryOptions extends QueryOptions
{
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartAxisTitleFormat properties
     * 
     * @param array<string> $select Use WorkbookChartAxisTitleFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
