<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartTitleFormat resources
 *
 * Available select fields:
 * - fill
 * - font
 */
class WorkbookChartTitleFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartTitleFormat
     */
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartTitleFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
