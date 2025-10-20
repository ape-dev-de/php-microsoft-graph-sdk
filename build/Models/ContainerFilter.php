<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContainerFilter
 */
class ContainerFilter
{
    /**
     */
    private ?string $includedContainers;

    public function getIncludedContainers(): ?string
    {
        return $this->includedContainers;
    }

    public function setIncludedContainers(?string $includedContainers): self
    {
        $this->includedContainers = $includedContainers;
        return $this;
    }

}
