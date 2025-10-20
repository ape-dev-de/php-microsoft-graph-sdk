<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartTitle resources
 *
 * Available select fields:
 * - overlay
 * - text
 * - visible
 * - format
 */
class WorkbookChartTitleQueryOptions extends QueryOptions
{
    public const FIELD_OVERLAY = 'overlay';
    public const FIELD_TEXT = 'text';
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartTitle properties
     * 
     * @param array<string> $select Use WorkbookChartTitleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
