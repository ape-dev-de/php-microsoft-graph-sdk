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
    /**
     * Available select fields for WorkbookChartGridlines
     */
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartGridlines properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
