<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantInformation resources
 *
 * Available select fields:
 * - defaultDomainName
 * - displayName
 * - federationBrandName
 * - tenantId
 */
class TenantInformationQueryOptions extends QueryOptions
{
    public const FIELD_DEFAULT_DOMAIN_NAME = 'defaultDomainName';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FEDERATION_BRAND_NAME = 'federationBrandName';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific TenantInformation properties
     * 
     * @param array<string> $select Use TenantInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
