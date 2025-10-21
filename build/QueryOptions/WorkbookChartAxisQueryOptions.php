<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxis resources
 *
 * Available select fields:
 * - majorUnit
 * - maximum
 * - minimum
 * - minorUnit
 * - format
 * - majorGridlines
 * - minorGridlines
 * - title
 */
class WorkbookChartAxisQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxis
     */
    public const FIELD_MAJOR_UNIT = 'majorUnit';
    public const FIELD_MAXIMUM = 'maximum';
    public const FIELD_MINIMUM = 'minimum';
    public const FIELD_MINOR_UNIT = 'minorUnit';
    public const FIELD_FORMAT = 'format';
    public const FIELD_MAJOR_GRIDLINES = 'majorGridlines';
    public const FIELD_MINOR_GRIDLINES = 'minorGridlines';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific WorkbookChartAxis properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
