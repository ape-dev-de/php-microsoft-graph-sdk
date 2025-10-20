<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationSimulationUserCoverage
 */
class AttackSimulationSimulationUserCoverage
{
    /**
     * User in an attack simulation and training campaign.
     */
    private ?string $attackSimulationUser;

    /**
     * Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
     */
    private ?float $clickCount;

    /**
     * Number of compromising actions by the user in attack simulation and training campaigns.
     */
    private ?float $compromisedCount;

    /**
     * Date and time of the latest attack simulation and training campaign that the user was included in.
     */
    private ?\DateTimeInterface $latestSimulationDateTime;

    /**
     * Number of attack simulation and training campaigns that the user was included in.
     */
    private ?string $simulationCount;

    public function getAttackSimulationUser(): ?string
    {
        return $this->attackSimulationUser;
    }

    public function setAttackSimulationUser(?string $attackSimulationUser): self
    {
        $this->attackSimulationUser = $attackSimulationUser;
        return $this;
    }

    public function getClickCount(): ?float
    {
        return $this->clickCount;
    }

    public function setClickCount(?float $clickCount): self
    {
        $this->clickCount = $clickCount;
        return $this;
    }

    public function getCompromisedCount(): ?float
    {
        return $this->compromisedCount;
    }

    public function setCompromisedCount(?float $compromisedCount): self
    {
        $this->compromisedCount = $compromisedCount;
        return $this;
    }

    public function getLatestSimulationDateTime(): ?\DateTimeInterface
    {
        return $this->latestSimulationDateTime;
    }

    public function setLatestSimulationDateTime(?\DateTimeInterface $latestSimulationDateTime): self
    {
        $this->latestSimulationDateTime = $latestSimulationDateTime;
        return $this;
    }

    public function getSimulationCount(): ?string
    {
        return $this->simulationCount;
    }

    public function setSimulationCount(?string $simulationCount): self
    {
        $this->simulationCount = $simulationCount;
        return $this;
    }

}
