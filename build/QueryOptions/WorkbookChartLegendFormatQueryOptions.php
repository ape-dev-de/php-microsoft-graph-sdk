<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartLegendFormat resources
 *
 * Available select fields:
 * - fill
 * - font
 */
class WorkbookChartLegendFormatQueryOptions extends QueryOptions
{
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartLegendFormat properties
     * 
     * @param array<string> $select Use WorkbookChartLegendFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
