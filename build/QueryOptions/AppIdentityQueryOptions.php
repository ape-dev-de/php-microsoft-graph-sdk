<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppIdentity resources
 *
 * Available select fields:
 * - appId
 * - displayName
 * - servicePrincipalId
 * - servicePrincipalName
 */
class AppIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppIdentity
     */
    public const FIELD_APP_ID = 'appId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_SERVICE_PRINCIPAL_ID = 'servicePrincipalId';
    public const FIELD_SERVICE_PRINCIPAL_NAME = 'servicePrincipalName';

    /**
     * Select specific AppIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
