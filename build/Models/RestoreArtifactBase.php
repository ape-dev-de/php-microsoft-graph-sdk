<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactBase
 */
class RestoreArtifactBase
{
    /**
     * The time when restoration of restore artifact is completed.
     */
    private ?\DateTimeInterface $completionDateTime;

    /**
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     */
    private ?string $destinationType;

    /**
     * Contains error details if the restore session fails or completes with an error.
     */
    private ?string $error;

    /**
     * The time when restoration of restore artifact is started.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     */
    private ?string $restorePoint;

    public function getCompletionDateTime(): ?\DateTimeInterface
    {
        return $this->completionDateTime;
    }

    public function setCompletionDateTime(?\DateTimeInterface $completionDateTime): self
    {
        $this->completionDateTime = $completionDateTime;
        return $this;
    }

    public function getDestinationType(): ?string
    {
        return $this->destinationType;
    }

    public function setDestinationType(?string $destinationType): self
    {
        $this->destinationType = $destinationType;
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

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
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

    public function getRestorePoint(): ?string
    {
        return $this->restorePoint;
    }

    public function setRestorePoint(?string $restorePoint): self
    {
        $this->restorePoint = $restorePoint;
        return $this;
    }

}
