<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipOperation resources
 *
 * Available select fields:
 * - createdDateTime
 * - data
 * - lastModifiedDateTime
 * - operationType
 * - status
 */
class DelegatedAdminRelationshipOperationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DATA = 'data';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific DelegatedAdminRelationshipOperation properties
     * 
     * @param array<string> $select Use DelegatedAdminRelationshipOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
