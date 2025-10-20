<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftCustomTrainingSetting
 */
class MicrosoftCustomTrainingSetting
{
    /**
     * The completion date and time of the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $completionDateTime;

    /**
     * The mapping details of the associated training.
     */
    private array $trainingAssignmentMappings = [];

    /**
     * The training completion duration that needs to be provided before scheduling the training. Possible values are: week, fortnite, month, unknownFutureValue.
     */
    private ?string $trainingCompletionDuration;

    public function getCompletionDateTime(): ?\DateTimeInterface
    {
        return $this->completionDateTime;
    }

    public function setCompletionDateTime(?\DateTimeInterface $completionDateTime): self
    {
        $this->completionDateTime = $completionDateTime;
        return $this;
    }

    public function getTrainingAssignmentMappings(): array
    {
        return $this->trainingAssignmentMappings;
    }

    public function setTrainingAssignmentMappings(array $trainingAssignmentMappings): self
    {
        $this->trainingAssignmentMappings = $trainingAssignmentMappings;
        return $this;
    }

    public function getTrainingCompletionDuration(): ?string
    {
        return $this->trainingCompletionDuration;
    }

    public function setTrainingCompletionDuration(?string $trainingCompletionDuration): self
    {
        $this->trainingCompletionDuration = $trainingCompletionDuration;
        return $this;
    }

}
