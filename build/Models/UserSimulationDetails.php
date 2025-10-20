<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationDetails
 */
class UserSimulationDetails
{
    /**
     * Number of trainings assigned to a user in an attack simulation and training campaign.
     */
    private ?float $assignedTrainingsCount;

    /**
     * Number of trainings completed by a user in an attack simulation and training campaign.
     */
    private ?float $completedTrainingsCount;

    /**
     * Date and time of the compromising online action by a user in an attack simulation and training campaign.
     */
    private ?\DateTimeInterface $compromisedDateTime;

    /**
     * Number of trainings in progress by a user in an attack simulation and training campaign.
     */
    private ?float $inProgressTrainingsCount;

    /**
     * Indicates whether a user was compromised in an attack simulation and training campaign.
     */
    private ?bool $isCompromised;

    /**
     * Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     */
    private ?\DateTimeInterface $reportedPhishDateTime;

    /**
     * List of simulation events of a user in the attack simulation and training campaign.
     */
    private array $simulationEvents = [];

    /**
     * User in an attack simulation and training campaign.
     */
    private ?string $simulationUser;

    /**
     * List of training events of a user in the attack simulation and training campaign.
     */
    private ?string $trainingEvents;

    public function getAssignedTrainingsCount(): ?float
    {
        return $this->assignedTrainingsCount;
    }

    public function setAssignedTrainingsCount(?float $assignedTrainingsCount): self
    {
        $this->assignedTrainingsCount = $assignedTrainingsCount;
        return $this;
    }

    public function getCompletedTrainingsCount(): ?float
    {
        return $this->completedTrainingsCount;
    }

    public function setCompletedTrainingsCount(?float $completedTrainingsCount): self
    {
        $this->completedTrainingsCount = $completedTrainingsCount;
        return $this;
    }

    public function getCompromisedDateTime(): ?\DateTimeInterface
    {
        return $this->compromisedDateTime;
    }

    public function setCompromisedDateTime(?\DateTimeInterface $compromisedDateTime): self
    {
        $this->compromisedDateTime = $compromisedDateTime;
        return $this;
    }

    public function getInProgressTrainingsCount(): ?float
    {
        return $this->inProgressTrainingsCount;
    }

    public function setInProgressTrainingsCount(?float $inProgressTrainingsCount): self
    {
        $this->inProgressTrainingsCount = $inProgressTrainingsCount;
        return $this;
    }

    public function getIsCompromised(): ?bool
    {
        return $this->isCompromised;
    }

    public function setIsCompromised(?bool $isCompromised): self
    {
        $this->isCompromised = $isCompromised;
        return $this;
    }

    public function getReportedPhishDateTime(): ?\DateTimeInterface
    {
        return $this->reportedPhishDateTime;
    }

    public function setReportedPhishDateTime(?\DateTimeInterface $reportedPhishDateTime): self
    {
        $this->reportedPhishDateTime = $reportedPhishDateTime;
        return $this;
    }

    public function getSimulationEvents(): array
    {
        return $this->simulationEvents;
    }

    public function setSimulationEvents(array $simulationEvents): self
    {
        $this->simulationEvents = $simulationEvents;
        return $this;
    }

    public function getSimulationUser(): ?string
    {
        return $this->simulationUser;
    }

    public function setSimulationUser(?string $simulationUser): self
    {
        $this->simulationUser = $simulationUser;
        return $this;
    }

    public function getTrainingEvents(): ?string
    {
        return $this->trainingEvents;
    }

    public function setTrainingEvents(?string $trainingEvents): self
    {
        $this->trainingEvents = $trainingEvents;
        return $this;
    }

}
