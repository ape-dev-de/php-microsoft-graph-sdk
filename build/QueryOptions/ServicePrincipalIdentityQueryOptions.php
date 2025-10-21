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
    /**
     * Available select fields for ServicePrincipalIdentity
     */
    public const FIELD_APP_ID = 'appId';

    /**
     * Select specific ServicePrincipalIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
