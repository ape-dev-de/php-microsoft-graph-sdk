<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GranularMailboxRestoreArtifact
 */
class GranularMailboxRestoreArtifact
{
    /**
     * This property will be deprecated soon. Don't use.
     */
    private ?float $artifactCount;

    /**
     * .
     */
    private ?string $searchResponseId;

    public function getArtifactCount(): ?float
    {
        return $this->artifactCount;
    }

    public function setArtifactCount(?float $artifactCount): self
    {
        $this->artifactCount = $artifactCount;
        return $this;
    }

    public function getSearchResponseId(): ?string
    {
        return $this->searchResponseId;
    }

    public function setSearchResponseId(?string $searchResponseId): self
    {
        $this->searchResponseId = $searchResponseId;
        return $this;
    }

}
