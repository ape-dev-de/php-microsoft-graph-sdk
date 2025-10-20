<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditEvent resources
 *
 * Available select fields:
 * - activity
 * - activityDateTime
 * - activityOperationType
 * - activityResult
 * - activityType
 * - actor
 * - category
 * - componentName
 * - correlationId
 * - displayName
 * - resources
 */
class AuditEventQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_ACTIVITY_OPERATION_TYPE = 'activityOperationType';
    public const FIELD_ACTIVITY_RESULT = 'activityResult';
    public const FIELD_ACTIVITY_TYPE = 'activityType';
    public const FIELD_ACTOR = 'actor';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_COMPONENT_NAME = 'componentName';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_RESOURCES = 'resources';

    /**
     * Select specific AuditEvent properties
     * 
     * @param array<string> $select Use AuditEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
