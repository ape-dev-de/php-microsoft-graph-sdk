<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEvent resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - eventPropagationResults
 * - eventQueries
 * - eventStatus
 * - eventTriggerDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - lastStatusUpdateDateTime
 * - retentionEventType
 */
class SecurityRetentionEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionEvent
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EVENT_PROPAGATION_RESULTS = 'eventPropagationResults';
    public const FIELD_EVENT_QUERIES = 'eventQueries';
    public const FIELD_EVENT_STATUS = 'eventStatus';
    public const FIELD_EVENT_TRIGGER_DATE_TIME = 'eventTriggerDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LAST_STATUS_UPDATE_DATE_TIME = 'lastStatusUpdateDateTime';
    public const FIELD_RETENTION_EVENT_TYPE = 'retentionEventType';

    /**
     * Select specific SecurityRetentionEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
