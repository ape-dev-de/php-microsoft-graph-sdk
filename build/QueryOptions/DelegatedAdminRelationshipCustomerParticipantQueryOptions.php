<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipCustomerParticipant resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 */
class DelegatedAdminRelationshipCustomerParticipantQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific DelegatedAdminRelationshipCustomerParticipant properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipCustomerParticipantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
