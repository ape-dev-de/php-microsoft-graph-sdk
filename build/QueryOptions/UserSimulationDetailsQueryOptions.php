<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSimulationDetails resources
 *
 * Available select fields:
 * - assignedTrainingsCount
 * - completedTrainingsCount
 * - compromisedDateTime
 * - inProgressTrainingsCount
 * - isCompromised
 * - reportedPhishDateTime
 * - simulationEvents
 * - simulationUser
 * - trainingEvents
 */
class UserSimulationDetailsQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_TRAININGS_COUNT = 'assignedTrainingsCount';
    public const FIELD_COMPLETED_TRAININGS_COUNT = 'completedTrainingsCount';
    public const FIELD_COMPROMISED_DATE_TIME = 'compromisedDateTime';
    public const FIELD_IN_PROGRESS_TRAININGS_COUNT = 'inProgressTrainingsCount';
    public const FIELD_IS_COMPROMISED = 'isCompromised';
    public const FIELD_REPORTED_PHISH_DATE_TIME = 'reportedPhishDateTime';
    public const FIELD_SIMULATION_EVENTS = 'simulationEvents';
    public const FIELD_SIMULATION_USER = 'simulationUser';
    public const FIELD_TRAINING_EVENTS = 'trainingEvents';

    /**
     * Select specific UserSimulationDetails properties
     * 
     * @param array<string> $select Use UserSimulationDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
