<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OAuth2PermissionGrant resources
 *
 * Available select fields:
 * - clientId
 * - consentType
 * - principalId
 * - resourceId
 * - scope
 */
class OAuth2PermissionGrantQueryOptions extends QueryOptions
{
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_CONSENT_TYPE = 'consentType';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_SCOPE = 'scope';

    /**
     * Select specific OAuth2PermissionGrant properties
     * 
     * @param array<string> $select Use OAuth2PermissionGrantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
