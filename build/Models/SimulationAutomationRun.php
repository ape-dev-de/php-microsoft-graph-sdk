<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomationRun
 */
class SimulationAutomationRun
{
    /**
     * Date and time when the run ends in an attack simulation automation.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.
     */
    private ?string $simulationId;

    /**
     * Date and time when the run starts in an attack simulation automation.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
     */
    private ?string $status;


    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getSimulationId(): ?string
    {
        return $this->simulationId;
    }

    public function setSimulationId(?string $simulationId): self
    {
        $this->simulationId = $simulationId;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
