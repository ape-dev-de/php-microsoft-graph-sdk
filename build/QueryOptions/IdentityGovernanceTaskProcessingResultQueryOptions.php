<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskProcessingResult resources
 *
 * Available select fields:
 * - completedDateTime
 * - createdDateTime
 * - failureReason
 * - processingStatus
 * - startedDateTime
 * - subject
 * - task
 */
class IdentityGovernanceTaskProcessingResultQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_FAILURE_REASON = 'failureReason';
    public const FIELD_PROCESSING_STATUS = 'processingStatus';
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TASK = 'task';

    /**
     * Select specific IdentityGovernanceTaskProcessingResult properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskProcessingResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
