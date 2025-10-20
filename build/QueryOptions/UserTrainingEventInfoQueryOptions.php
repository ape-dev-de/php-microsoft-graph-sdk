<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTrainingEventInfo resources
 *
 * Available select fields:
 * - displayName
 * - latestTrainingStatus
 * - trainingAssignedProperties
 * - trainingCompletedProperties
 * - trainingUpdatedProperties
 */
class UserTrainingEventInfoQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LATEST_TRAINING_STATUS = 'latestTrainingStatus';
    public const FIELD_TRAINING_ASSIGNED_PROPERTIES = 'trainingAssignedProperties';
    public const FIELD_TRAINING_COMPLETED_PROPERTIES = 'trainingCompletedProperties';
    public const FIELD_TRAINING_UPDATED_PROPERTIES = 'trainingUpdatedProperties';

    /**
     * Select specific UserTrainingEventInfo properties
     * 
     * @param array<string> $select Use UserTrainingEventInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
