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
     */
    private ?string $sensitivityLabels;

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

    public function getSensitivityLabels(): ?string
    {
        return $this->sensitivityLabels;
    }

    public function setSensitivityLabels(?string $sensitivityLabels): self
    {
        $this->sensitivityLabels = $sensitivityLabels;
        return $this;
    }

}
