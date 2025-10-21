<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Filter resources
 *
 * Available select fields:
 * - categoryFilterGroups
 * - groups
 * - inputFilterGroups
 */
class FilterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Filter
     */
    public const FIELD_CATEGORY_FILTER_GROUPS = 'categoryFilterGroups';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_INPUT_FILTER_GROUPS = 'inputFilterGroups';

    /**
     * Select specific Filter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
