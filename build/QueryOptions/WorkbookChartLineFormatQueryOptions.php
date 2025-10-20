<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartLineFormat resources
 *
 * Available select fields:
 * - color
 */
class WorkbookChartLineFormatQueryOptions extends QueryOptions
{
    public const FIELD_COLOR = 'color';

    /**
     * Select specific WorkbookChartLineFormat properties
     * 
     * @param array<string> $select Use WorkbookChartLineFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
