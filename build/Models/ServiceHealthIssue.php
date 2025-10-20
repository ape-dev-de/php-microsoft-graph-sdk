<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssue
 */
class ServiceHealthIssue
{
    /**
     */
    private ?string $classification;

    /**
     * The feature name of the service issue.
     */
    private ?string $feature;

    /**
     * The feature group name of the service issue.
     */
    private ?string $featureGroup;

    /**
     * The description of the service issue impact.
     */
    private ?string $impactDescription;

    /**
     * Indicates whether the issue is resolved.
     */
    private ?bool $isResolved;

    /**
     */
    private ?string $origin;

    /**
     * Collection of historical posts for the service issue.
     */
    private array $posts = [];

    /**
     * Indicates the service affected by the issue.
     */
    private ?string $service;

    /**
     */
    private ?string $status;

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    public function getFeature(): ?string
    {
        return $this->feature;
    }

    public function setFeature(?string $feature): self
    {
        $this->feature = $feature;
        return $this;
    }

    public function getFeatureGroup(): ?string
    {
        return $this->featureGroup;
    }

    public function setFeatureGroup(?string $featureGroup): self
    {
        $this->featureGroup = $featureGroup;
        return $this;
    }

    public function getImpactDescription(): ?string
    {
        return $this->impactDescription;
    }

    public function setImpactDescription(?string $impactDescription): self
    {
        $this->impactDescription = $impactDescription;
        return $this;
    }

    public function getIsResolved(): ?bool
    {
        return $this->isResolved;
    }

    public function setIsResolved(?bool $isResolved): self
    {
        $this->isResolved = $isResolved;
        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function setPosts(array $posts): self
    {
        $this->posts = $posts;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
