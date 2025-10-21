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
    /**
     * Available select fields for WorkbookChartDataLabelFormat
     */
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartDataLabelFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
