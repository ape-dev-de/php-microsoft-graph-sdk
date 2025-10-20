<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingEventsContent resources
 *
 * Available select fields:
 * - assignedTrainingsInfos
 * - trainingsAssignedUserCount
 */
class TrainingEventsContentQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_TRAININGS_INFOS = 'assignedTrainingsInfos';
    public const FIELD_TRAININGS_ASSIGNED_USER_COUNT = 'trainingsAssignedUserCount';

    /**
     * Select specific TrainingEventsContent properties
     * 
     * @param array<string> $select Use TrainingEventsContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
