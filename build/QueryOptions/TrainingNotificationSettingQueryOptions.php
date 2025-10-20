<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingNotificationSetting resources
 *
 * Available select fields:
 * - trainingAssignment
 * - trainingReminder
 */
class TrainingNotificationSettingQueryOptions extends QueryOptions
{
    public const FIELD_TRAINING_ASSIGNMENT = 'trainingAssignment';
    public const FIELD_TRAINING_REMINDER = 'trainingReminder';

    /**
     * Select specific TrainingNotificationSetting properties
     * 
     * @param array<string> $select Use TrainingNotificationSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
