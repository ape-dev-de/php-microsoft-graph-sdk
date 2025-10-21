<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataPolicyOperation
 */
class DataPolicyOperation
{
    /**
     * Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * Specifies the progress of an operation.
     */
    private ?string $progress;

    /**
     * Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * The URL location to where data is being exported for export requests.
     */
    private ?string $storageLocation;

    /**
     * Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $submittedDateTime;

    /**
     * The id for the user on whom the operation is performed.
     */
    private ?string $userId;


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getProgress(): ?string
    {
        return $this->progress;
    }

    public function setProgress(?string $progress): self
    {
        $this->progress = $progress;
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

    public function getStorageLocation(): ?string
    {
        return $this->storageLocation;
    }

    public function setStorageLocation(?string $storageLocation): self
    {
        $this->storageLocation = $storageLocation;
        return $this;
    }

    public function getSubmittedDateTime(): ?\DateTimeInterface
    {
        return $this->submittedDateTime;
    }

    public function setSubmittedDateTime(?\DateTimeInterface $submittedDateTime): self
    {
        $this->submittedDateTime = $submittedDateTime;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
