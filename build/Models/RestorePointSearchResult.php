<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResult
 */
class RestorePointSearchResult
{
    /**
     * Total number of artifacts restored.
     */
    private ?float $artifactHitCount;

    /**
     */
    private ?string $restorePoint;


    public function getArtifactHitCount(): ?float
    {
        return $this->artifactHitCount;
    }

    public function setArtifactHitCount(?float $artifactHitCount): self
    {
        $this->artifactHitCount = $artifactHitCount;
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
