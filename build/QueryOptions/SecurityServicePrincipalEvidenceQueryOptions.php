<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityServicePrincipalEvidence resources
 *
 * Available select fields:
 * - appId
 * - appOwnerTenantId
 * - servicePrincipalName
 * - servicePrincipalObjectId
 * - servicePrincipalType
 * - tenantId
 */
class SecurityServicePrincipalEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';
    public const FIELD_APP_OWNER_TENANT_ID = 'appOwnerTenantId';
    public const FIELD_SERVICE_PRINCIPAL_NAME = 'servicePrincipalName';
    public const FIELD_SERVICE_PRINCIPAL_OBJECT_ID = 'servicePrincipalObjectId';
    public const FIELD_SERVICE_PRINCIPAL_TYPE = 'servicePrincipalType';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific SecurityServicePrincipalEvidence properties
     * 
     * @param array<string> $select Use SecurityServicePrincipalEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
