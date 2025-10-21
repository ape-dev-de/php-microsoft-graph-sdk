<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftManagedTrainingSetting resources
 *
 * Available select fields:
 * - completionDateTime
 * - trainingCompletionDuration
 */
class MicrosoftManagedTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftManagedTrainingSetting
     */
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_TRAINING_COMPLETION_DURATION = 'trainingCompletionDuration';

    /**
     * Select specific MicrosoftManagedTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
