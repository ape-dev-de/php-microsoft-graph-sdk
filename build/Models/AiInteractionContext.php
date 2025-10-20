<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionContext
 */
class AiInteractionContext
{
    /**
     */
    private ?string $contextReference;

    /**
     */
    private ?string $contextType;

    /**
     */
    private ?string $displayName;

    public function getContextReference(): ?string
    {
        return $this->contextReference;
    }

    public function setContextReference(?string $contextReference): self
    {
        $this->contextReference = $contextReference;
        return $this;
    }

    public function getContextType(): ?string
    {
        return $this->contextType;
    }

    public function setContextType(?string $contextType): self
    {
        $this->contextType = $contextType;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
