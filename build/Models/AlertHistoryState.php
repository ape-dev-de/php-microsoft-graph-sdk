<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertHistoryState
 */
class AlertHistoryState
{
    /**
     */
    private ?string $appId;

    /**
     */
    private ?string $assignedTo;

    /**
     */
    private ?string $comments;

    /**
     */
    private ?string $feedback;

    /**
     */
    private ?string $status;

    /**
     */
    private ?\DateTimeInterface $updatedDateTime;

    /**
     */
    private ?string $user;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): self
    {
        $this->feedback = $feedback;
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

    public function getUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->updatedDateTime;
    }

    public function setUpdatedDateTime(?\DateTimeInterface $updatedDateTime): self
    {
        $this->updatedDateTime = $updatedDateTime;
        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }

}
