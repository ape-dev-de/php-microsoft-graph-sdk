<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalIdentity resources
 *
 * Available select fields:
 * - appId
 */
class ServicePrincipalIdentityQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';

    /**
     * Select specific ServicePrincipalIdentity properties
     * 
     * @param array<string> $select Use ServicePrincipalIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
