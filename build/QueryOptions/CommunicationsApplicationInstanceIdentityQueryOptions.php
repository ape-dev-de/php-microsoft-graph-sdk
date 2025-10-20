<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsApplicationInstanceIdentity resources
 *
 * Available select fields:
 * - hidden
 * - tenantId
 */
class CommunicationsApplicationInstanceIdentityQueryOptions extends QueryOptions
{
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific CommunicationsApplicationInstanceIdentity properties
     * 
     * @param array<string> $select Use CommunicationsApplicationInstanceIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
