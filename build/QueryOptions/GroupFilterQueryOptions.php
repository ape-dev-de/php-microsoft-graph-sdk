<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupFilter resources
 *
 * Available select fields:
 * - includedGroups
 */
class GroupFilterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupFilter
     */
    public const FIELD_INCLUDED_GROUPS = 'includedGroups';

    /**
     * Select specific GroupFilter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
