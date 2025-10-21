<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFill resources
 *
 * Available select fields:
 * - color
 */
class WorkbookRangeFillQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeFill
     */
    public const FIELD_COLOR = 'color';

    /**
     * Select specific WorkbookRangeFill properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
