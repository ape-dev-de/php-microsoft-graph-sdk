<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskProcessingResult
 */
class IdentityGovernanceTaskProcessingResult
{
    /**
     * The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The date time when the taskProcessingResult was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Describes why the taskProcessingResult has failed.
     */
    private ?string $failureReason;

    /**
     */
    private ?string $processingStatus;

    /**
     * The date time when taskProcessingResult execution started. Value is null if task execution has not yet started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $startedDateTime;

    /**
     */
    private ?string $subject;

    /**
     */
    private ?string $task;


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getFailureReason(): ?string
    {
        return $this->failureReason;
    }

    public function setFailureReason(?string $failureReason): self
    {
        $this->failureReason = $failureReason;
        return $this;
    }

    public function getProcessingStatus(): ?string
    {
        return $this->processingStatus;
    }

    public function setProcessingStatus(?string $processingStatus): self
    {
        $this->processingStatus = $processingStatus;
        return $this;
    }

    public function getStartedDateTime(): ?\DateTimeInterface
    {
        return $this->startedDateTime;
    }

    public function setStartedDateTime(?\DateTimeInterface $startedDateTime): self
    {
        $this->startedDateTime = $startedDateTime;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(?string $task): self
    {
        $this->task = $task;
        return $this;
    }

}
