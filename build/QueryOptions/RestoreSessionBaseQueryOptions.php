<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreSessionBase resources
 *
 * Available select fields:
 * - completedDateTime
 * - createdBy
 * - createdDateTime
 * - error
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - restoreJobType
 * - restoreSessionArtifactCount
 * - status
 */
class RestoreSessionBaseQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RESTORE_JOB_TYPE = 'restoreJobType';
    public const FIELD_RESTORE_SESSION_ARTIFACT_COUNT = 'restoreSessionArtifactCount';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific RestoreSessionBase properties
     * 
     * @param array<string> $select Use RestoreSessionBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
