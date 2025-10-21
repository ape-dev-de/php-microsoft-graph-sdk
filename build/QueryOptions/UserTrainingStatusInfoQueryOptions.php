<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTrainingStatusInfo resources
 *
 * Available select fields:
 * - assignedDateTime
 * - completionDateTime
 * - displayName
 * - trainingStatus
 */
class UserTrainingStatusInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserTrainingStatusInfo
     */
    public const FIELD_ASSIGNED_DATE_TIME = 'assignedDateTime';
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TRAINING_STATUS = 'trainingStatus';

    /**
     * Select specific UserTrainingStatusInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
