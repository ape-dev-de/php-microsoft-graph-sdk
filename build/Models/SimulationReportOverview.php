<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReportOverview
 */
class SimulationReportOverview
{
    /**
     * List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     */
    private array $recommendedActions = [];

    /**
     * Number of valid users in the attack simulation and training campaign.
     */
    private ?float $resolvedTargetsCount;

    /**
     * Summary of simulation events in the attack simulation and training campaign.
     */
    private ?string $simulationEventsContent;

    /**
     * Summary of assigned trainings in the attack simulation and training campaign.
     */
    private ?string $trainingEventsContent;


    public function getRecommendedActions(): array
    {
        return $this->recommendedActions;
    }

    public function setRecommendedActions(array $recommendedActions): self
    {
        $this->recommendedActions = $recommendedActions;
        return $this;
    }

    public function getResolvedTargetsCount(): ?float
    {
        return $this->resolvedTargetsCount;
    }

    public function setResolvedTargetsCount(?float $resolvedTargetsCount): self
    {
        $this->resolvedTargetsCount = $resolvedTargetsCount;
        return $this;
    }

    public function getSimulationEventsContent(): ?string
    {
        return $this->simulationEventsContent;
    }

    public function setSimulationEventsContent(?string $simulationEventsContent): self
    {
        $this->simulationEventsContent = $simulationEventsContent;
        return $this;
    }

    public function getTrainingEventsContent(): ?string
    {
        return $this->trainingEventsContent;
    }

    public function setTrainingEventsContent(?string $trainingEventsContent): self
    {
        $this->trainingEventsContent = $trainingEventsContent;
        return $this;
    }

}
