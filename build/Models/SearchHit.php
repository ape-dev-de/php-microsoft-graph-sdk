<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHit
 */
class SearchHit
{
    /**
     * The name of the content source that the externalItem is part of.
     */
    private ?string $contentSource;

    /**
     * The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
     */
    private ?string $hitId;

    /**
     * Indicates whether the current result is collapsed when the collapseProperties property in the searchRequest is used.
     */
    private ?bool $isCollapsed;

    /**
     * The rank or the order of the result.
     */
    private ?float $rank;

    /**
     * ID of the result template used to render the search result. This ID must map to a display layout in the resultTemplates dictionary that is also included in the searchResponse.
     */
    private ?string $resultTemplateId;

    /**
     * A summary of the result, if a summary is available.
     */
    private ?string $summary;

    /**
     */
    private ?string $resource;


    public function getContentSource(): ?string
    {
        return $this->contentSource;
    }

    public function setContentSource(?string $contentSource): self
    {
        $this->contentSource = $contentSource;
        return $this;
    }

    public function getHitId(): ?string
    {
        return $this->hitId;
    }

    public function setHitId(?string $hitId): self
    {
        $this->hitId = $hitId;
        return $this;
    }

    public function getIsCollapsed(): ?bool
    {
        return $this->isCollapsed;
    }

    public function setIsCollapsed(?bool $isCollapsed): self
    {
        $this->isCollapsed = $isCollapsed;
        return $this;
    }

    public function getRank(): ?float
    {
        return $this->rank;
    }

    public function setRank(?float $rank): self
    {
        $this->rank = $rank;
        return $this;
    }

    public function getResultTemplateId(): ?string
    {
        return $this->resultTemplateId;
    }

    public function setResultTemplateId(?string $resultTemplateId): self
    {
        $this->resultTemplateId = $resultTemplateId;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}
