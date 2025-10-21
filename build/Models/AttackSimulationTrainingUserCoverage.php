<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationTrainingUserCoverage
 */
class AttackSimulationTrainingUserCoverage
{
    /**
     * User in an attack simulation and training campaign.
     */
    private ?string $attackSimulationUser;

    /**
     * List of assigned trainings and their statuses for the user.
     * @var string[]
     */
    private array $userTrainings = [];


    public function getAttackSimulationUser(): ?string
    {
        return $this->attackSimulationUser;
    }

    public function setAttackSimulationUser(?string $attackSimulationUser): self
    {
        $this->attackSimulationUser = $attackSimulationUser;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserTrainings(): array
    {
        return $this->userTrainings;
    }

    /**
     * @param string[] $userTrainings
     */
    public function setUserTrainings(array $userTrainings): self
    {
        $this->userTrainings = $userTrainings;
        return $this;
    }

}
