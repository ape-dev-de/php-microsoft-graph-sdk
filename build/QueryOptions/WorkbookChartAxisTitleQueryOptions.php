<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxisTitle resources
 *
 * Available select fields:
 * - text
 * - visible
 * - format
 */
class WorkbookChartAxisTitleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxisTitle
     */
    public const FIELD_TEXT = 'text';
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartAxisTitle properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
