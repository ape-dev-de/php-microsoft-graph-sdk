<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingEventInfo
 */
class UserTrainingEventInfo
{
    /**
     * Display name of the training.
     */
    private ?string $displayName;

    /**
     * Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     */
    private ?string $latestTrainingStatus;

    /**
     * Event details of the training when it was assigned to the user.
     */
    private ?string $trainingAssignedProperties;

    /**
     * Event details of the training when it was completed by the user.
     */
    private ?string $trainingCompletedProperties;

    /**
     * Event details of the training when it was updated/in-progress by the user.
     */
    private ?string $trainingUpdatedProperties;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLatestTrainingStatus(): ?string
    {
        return $this->latestTrainingStatus;
    }

    public function setLatestTrainingStatus(?string $latestTrainingStatus): self
    {
        $this->latestTrainingStatus = $latestTrainingStatus;
        return $this;
    }

    public function getTrainingAssignedProperties(): ?string
    {
        return $this->trainingAssignedProperties;
    }

    public function setTrainingAssignedProperties(?string $trainingAssignedProperties): self
    {
        $this->trainingAssignedProperties = $trainingAssignedProperties;
        return $this;
    }

    public function getTrainingCompletedProperties(): ?string
    {
        return $this->trainingCompletedProperties;
    }

    public function setTrainingCompletedProperties(?string $trainingCompletedProperties): self
    {
        $this->trainingCompletedProperties = $trainingCompletedProperties;
        return $this;
    }

    public function getTrainingUpdatedProperties(): ?string
    {
        return $this->trainingUpdatedProperties;
    }

    public function setTrainingUpdatedProperties(?string $trainingUpdatedProperties): self
    {
        $this->trainingUpdatedProperties = $trainingUpdatedProperties;
        return $this;
    }

}
