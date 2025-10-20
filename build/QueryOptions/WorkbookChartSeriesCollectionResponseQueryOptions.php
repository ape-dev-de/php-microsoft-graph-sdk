<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartSeriesCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookChartSeriesCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookChartSeriesCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookChartSeriesCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
