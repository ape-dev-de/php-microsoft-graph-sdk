<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftTrainingAssignmentMapping
 */
class MicrosoftTrainingAssignmentMapping
{
    /**
     * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     */
    private array $assignedTo = [];

    /**
     */
    private ?string $training;

    public function getAssignedTo(): array
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(array $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getTraining(): ?string
    {
        return $this->training;
    }

    public function setTraining(?string $training): self
    {
        $this->training = $training;
        return $this;
    }

}
