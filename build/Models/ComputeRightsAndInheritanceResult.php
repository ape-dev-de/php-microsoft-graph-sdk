<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComputeRightsAndInheritanceResult
 */
class ComputeRightsAndInheritanceResult
{
    /**
     */
    private array $contentRights = [];

    /**
     */
    private ?string $inheritedLabel;

    /**
     * @var string[]
     */
    private array $sensitivityLabels = [];


    public function getContentRights(): array
    {
        return $this->contentRights;
    }

    public function setContentRights(array $contentRights): self
    {
        $this->contentRights = $contentRights;
        return $this;
    }

    public function getInheritedLabel(): ?string
    {
        return $this->inheritedLabel;
    }

    public function setInheritedLabel(?string $inheritedLabel): self
    {
        $this->inheritedLabel = $inheritedLabel;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSensitivityLabels(): array
    {
        return $this->sensitivityLabels;
    }

    /**
     * @param string[] $sensitivityLabels
     */
    public function setSensitivityLabels(array $sensitivityLabels): self
    {
        $this->sensitivityLabels = $sensitivityLabels;
        return $this;
    }

}
