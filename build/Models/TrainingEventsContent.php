<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingEventsContent
 */
class TrainingEventsContent
{
    /**
     * List of assigned trainings and their information in an attack simulation and training campaign.
     */
    private array $assignedTrainingsInfos = [];

    /**
     * Number of users who were assigned trainings in an attack simulation and training campaign.
     */
    private ?string $trainingsAssignedUserCount;


    public function getAssignedTrainingsInfos(): array
    {
        return $this->assignedTrainingsInfos;
    }

    public function setAssignedTrainingsInfos(array $assignedTrainingsInfos): self
    {
        $this->assignedTrainingsInfos = $assignedTrainingsInfos;
        return $this;
    }

    public function getTrainingsAssignedUserCount(): ?string
    {
        return $this->trainingsAssignedUserCount;
    }

    public function setTrainingsAssignedUserCount(?string $trainingsAssignedUserCount): self
    {
        $this->trainingsAssignedUserCount = $trainingsAssignedUserCount;
        return $this;
    }

}
