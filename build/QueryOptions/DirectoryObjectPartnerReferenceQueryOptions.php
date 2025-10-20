<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryObjectPartnerReference resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - externalPartnerTenantId
 * - objectType
 */
class DirectoryObjectPartnerReferenceQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_PARTNER_TENANT_ID = 'externalPartnerTenantId';
    public const FIELD_OBJECT_TYPE = 'objectType';

    /**
     * Select specific DirectoryObjectPartnerReference properties
     * 
     * @param array<string> $select Use DirectoryObjectPartnerReferenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
