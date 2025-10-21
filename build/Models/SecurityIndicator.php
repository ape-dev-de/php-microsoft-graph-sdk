<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicator
 */
class SecurityIndicator
{
    /**
     */
    private ?string $source;

    /**
     */
    private ?string $artifact;


    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getArtifact(): ?string
    {
        return $this->artifact;
    }

    public function setArtifact(?string $artifact): self
    {
        $this->artifact = $artifact;
        return $this;
    }

}
