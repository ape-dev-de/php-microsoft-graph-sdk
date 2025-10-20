<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartGridlines resources
 *
 * Available select fields:
 * - visible
 * - format
 */
class WorkbookChartGridlinesQueryOptions extends QueryOptions
{
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartGridlines properties
     * 
     * @param array<string> $select Use WorkbookChartGridlinesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
