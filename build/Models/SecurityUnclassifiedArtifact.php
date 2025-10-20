<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnclassifiedArtifact
 */
class SecurityUnclassifiedArtifact
{
    /**
     * The kind for this unclassifiedArtifact resource, describing what this value means.
     */
    private ?string $kind;

    /**
     * The value for this unclassifiedArtifact.
     */
    private ?string $value;

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
