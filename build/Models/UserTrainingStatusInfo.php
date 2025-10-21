<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingStatusInfo
 */
class UserTrainingStatusInfo
{
    /**
     * Date and time of assignment of the training to the user.
     */
    private ?\DateTimeInterface $assignedDateTime;

    /**
     * Date and time of completion of the training by the user.
     */
    private ?\DateTimeInterface $completionDateTime;

    /**
     * Display name of the assigned training.
     */
    private ?string $displayName;

    /**
     * The status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     */
    private ?string $trainingStatus;


    public function getAssignedDateTime(): ?\DateTimeInterface
    {
        return $this->assignedDateTime;
    }

    public function setAssignedDateTime(?\DateTimeInterface $assignedDateTime): self
    {
        $this->assignedDateTime = $assignedDateTime;
        return $this;
    }

    public function getCompletionDateTime(): ?\DateTimeInterface
    {
        return $this->completionDateTime;
    }

    public function setCompletionDateTime(?\DateTimeInterface $completionDateTime): self
    {
        $this->completionDateTime = $completionDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getTrainingStatus(): ?string
    {
        return $this->trainingStatus;
    }

    public function setTrainingStatus(?string $trainingStatus): self
    {
        $this->trainingStatus = $trainingStatus;
        return $this;
    }

}
