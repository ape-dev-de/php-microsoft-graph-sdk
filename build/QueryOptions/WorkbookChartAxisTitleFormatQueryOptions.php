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
    /**
     * Available select fields for WorkbookChartAxisTitleFormat
     */
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartAxisTitleFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
