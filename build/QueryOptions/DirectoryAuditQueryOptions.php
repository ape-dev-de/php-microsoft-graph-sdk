<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryAudit resources
 *
 * Available select fields:
 * - activityDateTime
 * - activityDisplayName
 * - additionalDetails
 * - category
 * - correlationId
 * - initiatedBy
 * - loggedByService
 * - operationType
 * - result
 * - resultReason
 * - targetResources
 */
class DirectoryAuditQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_ACTIVITY_DISPLAY_NAME = 'activityDisplayName';
    public const FIELD_ADDITIONAL_DETAILS = 'additionalDetails';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_INITIATED_BY = 'initiatedBy';
    public const FIELD_LOGGED_BY_SERVICE = 'loggedByService';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_RESULT = 'result';
    public const FIELD_RESULT_REASON = 'resultReason';
    public const FIELD_TARGET_RESOURCES = 'targetResources';

    /**
     * Select specific DirectoryAudit properties
     * 
     * @param array<string> $select Use DirectoryAuditQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
