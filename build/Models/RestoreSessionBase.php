<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionBase
 */
class RestoreSessionBase
{
    /**
     * The time of completion of the restore session.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The identity of person who created the restore session.
     */
    private ?string $createdBy;

    /**
     * The time of creation of the restore session.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Contains error details if the restore session fails or completes with an error.
     */
    private ?string $error;

    /**
     * Identity of the person who last modified the restore session.
     */
    private ?string $lastModifiedBy;

    /**
     * Timestamp of the last modification of the restore session.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Indicates whether the restore session was created normally or by a bulk job.
     */
    private ?string $restoreJobType;

    /**
     * The number of metadata artifacts that belong to this restore session.
     */
    private ?string $restoreSessionArtifactCount;

    /**
     * Status of the restore session. The value is an aggregated status of the restored artifacts. The possible values are: draft, activating, active, completedWithError, completed, unknownFutureValue, failed. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: failed.
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

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getRestoreJobType(): ?string
    {
        return $this->restoreJobType;
    }

    public function setRestoreJobType(?string $restoreJobType): self
    {
        $this->restoreJobType = $restoreJobType;
        return $this;
    }

    public function getRestoreSessionArtifactCount(): ?string
    {
        return $this->restoreSessionArtifactCount;
    }

    public function setRestoreSessionArtifactCount(?string $restoreSessionArtifactCount): self
    {
        $this->restoreSessionArtifactCount = $restoreSessionArtifactCount;
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
