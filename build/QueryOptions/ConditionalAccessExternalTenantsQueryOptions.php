<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessExternalTenants resources
 *
 * Available select fields:
 * - membershipKind
 */
class ConditionalAccessExternalTenantsQueryOptions extends QueryOptions
{
    public const FIELD_MEMBERSHIP_KIND = 'membershipKind';

    /**
     * Select specific ConditionalAccessExternalTenants properties
     * 
     * @param array<string> $select Use ConditionalAccessExternalTenantsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
