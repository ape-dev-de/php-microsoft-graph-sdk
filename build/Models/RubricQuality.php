<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQuality
 */
class RubricQuality
{
    /**
     * The collection of criteria for this rubric quality.
     */
    private array $criteria = [];

    /**
     * The description of this rubric quality.
     */
    private ?string $description;

    /**
     * The name of this rubric quality.
     */
    private ?string $displayName;

    /**
     * The ID of this resource.
     */
    private ?string $qualityId;

    /**
     * If present, a numerical weight for this quality.  Weights must add up to 100.
     */
    private ?string $weight;


    public function getCriteria(): array
    {
        return $this->criteria;
    }

    public function setCriteria(array $criteria): self
    {
        $this->criteria = $criteria;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getQualityId(): ?string
    {
        return $this->qualityId;
    }

    public function setQualityId(?string $qualityId): self
    {
        $this->qualityId = $qualityId;
        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

}
