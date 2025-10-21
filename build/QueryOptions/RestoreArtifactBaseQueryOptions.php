<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreArtifactBase resources
 *
 * Available select fields:
 * - completionDateTime
 * - destinationType
 * - error
 * - startDateTime
 * - status
 * - restorePoint
 */
class RestoreArtifactBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreArtifactBase
     */
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_DESTINATION_TYPE = 'destinationType';
    public const FIELD_ERROR = 'error';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_RESTORE_POINT = 'restorePoint';

    /**
     * Select specific RestoreArtifactBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
