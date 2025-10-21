<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReport
 */
class SimulationReport
{
    /**
     * Overview of an attack simulation and training campaign.
     */
    private ?string $overview;

    /**
     * The tenant users and their online actions in an attack simulation and training campaign.
     * @var string[]
     */
    private array $simulationUsers = [];


    public function getOverview(): ?string
    {
        return $this->overview;
    }

    public function setOverview(?string $overview): self
    {
        $this->overview = $overview;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSimulationUsers(): array
    {
        return $this->simulationUsers;
    }

    /**
     * @param string[] $simulationUsers
     */
    public function setSimulationUsers(array $simulationUsers): self
    {
        $this->simulationUsers = $simulationUsers;
        return $this;
    }

}
