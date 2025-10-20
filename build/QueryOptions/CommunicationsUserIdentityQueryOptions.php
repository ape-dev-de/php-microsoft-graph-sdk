<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsUserIdentity resources
 *
 * Available select fields:
 * - tenantId
 */
class CommunicationsUserIdentityQueryOptions extends QueryOptions
{
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific CommunicationsUserIdentity properties
     * 
     * @param array<string> $select Use CommunicationsUserIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
