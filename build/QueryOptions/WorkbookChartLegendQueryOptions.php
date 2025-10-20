<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartLegend resources
 *
 * Available select fields:
 * - overlay
 * - position
 * - visible
 * - format
 */
class WorkbookChartLegendQueryOptions extends QueryOptions
{
    public const FIELD_OVERLAY = 'overlay';
    public const FIELD_POSITION = 'position';
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartLegend properties
     * 
     * @param array<string> $select Use WorkbookChartLegendQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
