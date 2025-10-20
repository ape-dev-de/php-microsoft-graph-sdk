<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRedundancyDetectionSettings
 */
class SecurityRedundancyDetectionSettings
{
    /**
     * Indicates whether email threading and near duplicate detection are enabled.
     */
    private ?bool $isEnabled;

    /**
     * Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     */
    private ?float $maxWords;

    /**
     * Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     */
    private ?float $minWords;

    /**
     * Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
     */
    private ?string $similarityThreshold;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getMaxWords(): ?float
    {
        return $this->maxWords;
    }

    public function setMaxWords(?float $maxWords): self
    {
        $this->maxWords = $maxWords;
        return $this;
    }

    public function getMinWords(): ?float
    {
        return $this->minWords;
    }

    public function setMinWords(?float $minWords): self
    {
        $this->minWords = $minWords;
        return $this;
    }

    public function getSimilarityThreshold(): ?string
    {
        return $this->similarityThreshold;
    }

    public function setSimilarityThreshold(?string $similarityThreshold): self
    {
        $this->similarityThreshold = $similarityThreshold;
        return $this;
    }

}
