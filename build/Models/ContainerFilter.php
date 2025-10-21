<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContainerFilter
 */
class ContainerFilter
{
    /**
     * @var string[]
     */
    private array $includedContainers = [];


    /**
     * @return string[]
     */
    public function getIncludedContainers(): array
    {
        return $this->includedContainers;
    }

    /**
     * @param string[] $includedContainers
     */
    public function setIncludedContainers(array $includedContainers): self
    {
        $this->includedContainers = $includedContainers;
        return $this;
    }

}
