<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningCourseActivity
 */
class LearningCourseActivity
{
    /**
     * Date and time when the assignment was completed. Optional.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The percentage completion value of the course activity. Optional.
     */
    private ?float $completionPercentage;

    /**
     */
    private ?string $externalcourseActivityId;

    /**
     * The user ID of the learner to whom the activity is assigned. Required.
     */
    private ?string $learnerUserId;

    /**
     * The ID of the learning content created in Viva Learning. Required.
     */
    private ?string $learningContentId;

    /**
     * The registration ID of the provider. Required.
     */
    private ?string $learningProviderId;

    /**
     * The status of the course activity. Possible values are: notStarted, inProgress, completed. Required.
     */
    private ?string $status;


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getCompletionPercentage(): ?float
    {
        return $this->completionPercentage;
    }

    public function setCompletionPercentage(?float $completionPercentage): self
    {
        $this->completionPercentage = $completionPercentage;
        return $this;
    }

    public function getExternalcourseActivityId(): ?string
    {
        return $this->externalcourseActivityId;
    }

    public function setExternalcourseActivityId(?string $externalcourseActivityId): self
    {
        $this->externalcourseActivityId = $externalcourseActivityId;
        return $this;
    }

    public function getLearnerUserId(): ?string
    {
        return $this->learnerUserId;
    }

    public function setLearnerUserId(?string $learnerUserId): self
    {
        $this->learnerUserId = $learnerUserId;
        return $this;
    }

    public function getLearningContentId(): ?string
    {
        return $this->learningContentId;
    }

    public function setLearningContentId(?string $learningContentId): self
    {
        $this->learningContentId = $learningContentId;
        return $this;
    }

    public function getLearningProviderId(): ?string
    {
        return $this->learningProviderId;
    }

    public function setLearningProviderId(?string $learningProviderId): self
    {
        $this->learningProviderId = $learningProviderId;
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
