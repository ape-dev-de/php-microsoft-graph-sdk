<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationship resources
 *
 * Available select fields:
 * - accessDetails
 * - activatedDateTime
 * - autoExtendDuration
 * - createdDateTime
 * - customer
 * - displayName
 * - duration
 * - endDateTime
 * - lastModifiedDateTime
 * - status
 * - accessAssignments
 * - operations
 * - requests
 */
class DelegatedAdminRelationshipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationship
     */
    public const FIELD_ACCESS_DETAILS = 'accessDetails';
    public const FIELD_ACTIVATED_DATE_TIME = 'activatedDateTime';
    public const FIELD_AUTO_EXTEND_DURATION = 'autoExtendDuration';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DURATION = 'duration';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_ACCESS_ASSIGNMENTS = 'accessAssignments';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_REQUESTS = 'requests';

    /**
     * Select specific DelegatedAdminRelationship properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
