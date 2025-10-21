<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalSignIn resources
 *
 * Available select fields:
 * - servicePrincipalId
 */
class ServicePrincipalSignInQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipalSignIn
     */
    public const FIELD_SERVICE_PRINCIPAL_ID = 'servicePrincipalId';

    /**
     * Select specific ServicePrincipalSignIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
