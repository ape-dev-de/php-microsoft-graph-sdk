<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartFont resources
 *
 * Available select fields:
 */
class WorkbookChartFontQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartFont
     */

    /**
     * Select specific WorkbookChartFont properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
