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
    /**
     * Available select fields for ConditionalAccessEnumeratedExternalTenants
     */
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific ConditionalAccessEnumeratedExternalTenants properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
