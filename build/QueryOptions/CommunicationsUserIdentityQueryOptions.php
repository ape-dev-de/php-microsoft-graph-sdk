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
    /**
     * Available select fields for CommunicationsUserIdentity
     */
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific CommunicationsUserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
