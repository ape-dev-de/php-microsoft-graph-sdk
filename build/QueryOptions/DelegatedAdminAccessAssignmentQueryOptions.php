<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessAssignment resources
 *
 * Available select fields:
 * - accessContainer
 * - accessDetails
 * - createdDateTime
 * - lastModifiedDateTime
 * - status
 */
class DelegatedAdminAccessAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_CONTAINER = 'accessContainer';
    public const FIELD_ACCESS_DETAILS = 'accessDetails';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific DelegatedAdminAccessAssignment properties
     * 
     * @param array<string> $select Use DelegatedAdminAccessAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
