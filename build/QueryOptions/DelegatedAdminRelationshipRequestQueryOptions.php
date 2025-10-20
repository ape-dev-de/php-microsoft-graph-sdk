<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipRequest resources
 *
 * Available select fields:
 * - action
 * - createdDateTime
 * - lastModifiedDateTime
 * - status
 */
class DelegatedAdminRelationshipRequestQueryOptions extends QueryOptions
{
    public const FIELD_ACTION = 'action';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific DelegatedAdminRelationshipRequest properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
