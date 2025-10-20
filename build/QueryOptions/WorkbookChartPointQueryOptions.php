<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartPoint resources
 *
 * Available select fields:
 * - value
 * - format
 */
class WorkbookChartPointQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartPoint properties
     * 
     * @param array<string> $select Use WorkbookChartPointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
