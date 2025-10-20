<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MultiTenantOrganizationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MultiTenantOrganizationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use MultiTenantOrganizationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
