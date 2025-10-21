<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingEventsContent
 */
class TrainingEventsContent
{
    public function __construct(
        /** List of assigned trainings and their information in an attack simulation and training campaign. */
        public array $assignedTrainingsInfos = [],
        /** Number of users who were assigned trainings in an attack simulation and training campaign. */
        public ?string $trainingsAssignedUserCount = null
    ) {}
}
