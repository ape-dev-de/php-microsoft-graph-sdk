<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopedRoleMembershipCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ScopedRoleMembershipCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ScopedRoleMembershipCollectionResponse properties
     * 
     * @param array<string> $select Use ScopedRoleMembershipCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
