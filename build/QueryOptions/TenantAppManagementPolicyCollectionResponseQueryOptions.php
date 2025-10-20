<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantAppManagementPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TenantAppManagementPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TenantAppManagementPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use TenantAppManagementPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
