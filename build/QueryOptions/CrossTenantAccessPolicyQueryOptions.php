<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicy resources
 *
 * Available select fields:
 * - allowedCloudEndpoints
 * - default
 * - partners
 * - templates
 */
class CrossTenantAccessPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_CLOUD_ENDPOINTS = 'allowedCloudEndpoints';
    public const FIELD_DEFAULT = 'default';
    public const FIELD_PARTNERS = 'partners';
    public const FIELD_TEMPLATES = 'templates';

    /**
     * Select specific CrossTenantAccessPolicy properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
