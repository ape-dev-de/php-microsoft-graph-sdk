<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartDataLabelFormat resources
 *
 * Available select fields:
 * - fill
 * - font
 */
class WorkbookChartDataLabelFormatQueryOptions extends QueryOptions
{
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartDataLabelFormat properties
     * 
     * @param array<string> $select Use WorkbookChartDataLabelFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
