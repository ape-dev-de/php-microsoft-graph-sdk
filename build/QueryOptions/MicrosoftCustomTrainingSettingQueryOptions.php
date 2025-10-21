<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftCustomTrainingSetting resources
 *
 * Available select fields:
 * - completionDateTime
 * - trainingAssignmentMappings
 * - trainingCompletionDuration
 */
class MicrosoftCustomTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftCustomTrainingSetting
     */
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_TRAINING_ASSIGNMENT_MAPPINGS = 'trainingAssignmentMappings';
    public const FIELD_TRAINING_COMPLETION_DURATION = 'trainingCompletionDuration';

    /**
     * Select specific MicrosoftCustomTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
