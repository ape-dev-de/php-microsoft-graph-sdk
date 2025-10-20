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
    public const FIELD_INCLUDED_GROUPS = 'includedGroups';

    /**
     * Select specific GroupFilter properties
     * 
     * @param array<string> $select Use GroupFilterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
