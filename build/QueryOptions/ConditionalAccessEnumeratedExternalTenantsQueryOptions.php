<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessEnumeratedExternalTenants resources
 *
 * Available select fields:
 * - members
 */
class ConditionalAccessEnumeratedExternalTenantsQueryOptions extends QueryOptions
{
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific ConditionalAccessEnumeratedExternalTenants properties
     * 
     * @param array<string> $select Use ConditionalAccessEnumeratedExternalTenantsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
