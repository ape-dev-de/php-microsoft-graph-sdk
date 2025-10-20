<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionArtifactCount
 */
class RestoreSessionArtifactCount
{
    /**
     * The number of artifacts whose restoration completed.
     */
    private ?float $completed;

    /**
     * The number of artifacts whose restoration failed.
     */
    private ?float $failed;

    /**
     * The number of artifacts whose restoration is in progress.
     */
    private ?float $inProgress;

    /**
     * The number of artifacts present in the restore session.
     */
    private ?string $total;

    public function getCompleted(): ?float
    {
        return $this->completed;
    }

    public function setCompleted(?float $completed): self
    {
        $this->completed = $completed;
        return $this;
    }

    public function getFailed(): ?float
    {
        return $this->failed;
    }

    public function setFailed(?float $failed): self
    {
        $this->failed = $failed;
        return $this;
    }

    public function getInProgress(): ?float
    {
        return $this->inProgress;
    }

    public function setInProgress(?float $inProgress): self
    {
        $this->inProgress = $inProgress;
        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;
        return $this;
    }

}
