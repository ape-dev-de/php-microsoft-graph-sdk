<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Trending
 */
class Trending
{
    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Reference properties of the trending document, such as the url and type of the document.
     */
    private ?string $resourceReference;

    /**
     * Properties that you can use to visualize the document in your experience.
     */
    private ?string $resourceVisualization;

    /**
     * Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     */
    private ?string $weight;

    /**
     * Used for navigating to the trending document.
     */
    private ?string $resource;


    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getResourceReference(): ?string
    {
        return $this->resourceReference;
    }

    public function setResourceReference(?string $resourceReference): self
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    public function getResourceVisualization(): ?string
    {
        return $this->resourceVisualization;
    }

    public function setResourceVisualization(?string $resourceVisualization): self
    {
        $this->resourceVisualization = $resourceVisualization;
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
