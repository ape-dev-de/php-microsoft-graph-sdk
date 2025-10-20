<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAsyncOperation
 */
class TeamsAsyncOperation
{
    /**
     * Number of times the operation was attempted before being marked successful or failed.
     */
    private ?float $attemptsCount;

    /**
     * Time when the operation was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Any error that causes the async operation to fail.
     */
    private ?string $error;

    /**
     * Time when the async operation was last updated.
     */
    private ?\DateTimeInterface $lastActionDateTime;

    /**
     */
    private ?string $operationType;

    /**
     */
    private ?string $status;

    /**
     * The ID of the object that''s created or modified as result of this async operation, typically a team.
     */
    private ?string $targetResourceId;

    /**
     * The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
     */
    private ?string $targetResourceLocation;

    public function getAttemptsCount(): ?float
    {
        return $this->attemptsCount;
    }

    public function setAttemptsCount(?float $attemptsCount): self
    {
        $this->attemptsCount = $attemptsCount;
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

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getLastActionDateTime(): ?\DateTimeInterface
    {
        return $this->lastActionDateTime;
    }

    public function setLastActionDateTime(?\DateTimeInterface $lastActionDateTime): self
    {
        $this->lastActionDateTime = $lastActionDateTime;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
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

    public function getTargetResourceId(): ?string
    {
        return $this->targetResourceId;
    }

    public function setTargetResourceId(?string $targetResourceId): self
    {
        $this->targetResourceId = $targetResourceId;
        return $this;
    }

    public function getTargetResourceLocation(): ?string
    {
        return $this->targetResourceLocation;
    }

    public function setTargetResourceLocation(?string $targetResourceLocation): self
    {
        $this->targetResourceLocation = $targetResourceLocation;
        return $this;
    }

}
