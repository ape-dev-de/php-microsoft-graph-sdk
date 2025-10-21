<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAreaFormat resources
 *
 * Available select fields:
 * - fill
 * - font
 */
class WorkbookChartAreaFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAreaFormat
     */
    public const FIELD_FILL = 'fill';
    public const FIELD_FONT = 'font';

    /**
     * Select specific WorkbookChartAreaFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
