<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartPointFormat resources
 *
 * Available select fields:
 * - fill
 */
class WorkbookChartPointFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartPointFormat
     */
    public const FIELD_FILL = 'fill';

    /**
     * Select specific WorkbookChartPointFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
