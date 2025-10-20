<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeBorder resources
 *
 * Available select fields:
 * - color
 * - sideIndex
 * - style
 * - weight
 */
class WorkbookRangeBorderQueryOptions extends QueryOptions
{
    public const FIELD_COLOR = 'color';
    public const FIELD_SIDE_INDEX = 'sideIndex';
    public const FIELD_STYLE = 'style';
    public const FIELD_WEIGHT = 'weight';

    /**
     * Select specific WorkbookRangeBorder properties
     * 
     * @param array<string> $select Use WorkbookRangeBorderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
