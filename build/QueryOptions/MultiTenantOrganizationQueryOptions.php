<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganization resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - state
 * - joinRequest
 * - tenants
 */
class MultiTenantOrganizationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_STATE = 'state';
    public const FIELD_JOIN_REQUEST = 'joinRequest';
    public const FIELD_TENANTS = 'tenants';

    /**
     * Select specific MultiTenantOrganization properties
     * 
     * @param array<string> $select Use MultiTenantOrganizationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
