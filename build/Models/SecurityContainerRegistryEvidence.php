<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerRegistryEvidence
 */
class SecurityContainerRegistryEvidence
{
    /**
     * The registry URI.
     */
    private ?string $registry;


    public function getRegistry(): ?string
    {
        return $this->registry;
    }

    public function setRegistry(?string $registry): self
    {
        $this->registry = $registry;
        return $this;
    }

}
