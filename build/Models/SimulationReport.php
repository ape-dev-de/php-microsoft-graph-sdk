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
     */
    private ?string $simulationUsers;

    public function getOverview(): ?string
    {
        return $this->overview;
    }

    public function setOverview(?string $overview): self
    {
        $this->overview = $overview;
        return $this;
    }

    public function getSimulationUsers(): ?string
    {
        return $this->simulationUsers;
    }

    public function setSimulationUsers(?string $simulationUsers): self
    {
        $this->simulationUsers = $simulationUsers;
        return $this;
    }

}
