<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCase
 */
class SecurityEdiscoveryCase
{
    /**
     * The user who closed the case.
     */
    private ?string $closedBy;

    /**
     * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $closedDateTime;

    /**
     * The external case number for customer reference.
     */
    private ?string $externalId;

    /**
     * Returns a list of case ediscoveryCustodian objects for this case.
     */
    private array $custodians = [];

    /**
     * Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
     */
    private array $noncustodialDataSources = [];

    /**
     * Returns a list of case caseOperation objects for this case.
     */
    private array $operations = [];

    /**
     * Returns a list of eDiscoveryReviewSet objects in the case.
     */
    private array $reviewSets = [];

    /**
     * Returns a list of eDiscoverySearch objects associated with this case.
     */
    private array $searches = [];

    /**
     * Returns a list of eDIscoverySettings objects in the case.
     */
    private ?string $settings;

    /**
     * Returns a list of ediscoveryReviewTag objects associated to this case.
     * @var string[]
     */
    private array $tags = [];


    public function getClosedBy(): ?string
    {
        return $this->closedBy;
    }

    public function setClosedBy(?string $closedBy): self
    {
        $this->closedBy = $closedBy;
        return $this;
    }

    public function getClosedDateTime(): ?\DateTimeInterface
    {
        return $this->closedDateTime;
    }

    public function setClosedDateTime(?\DateTimeInterface $closedDateTime): self
    {
        $this->closedDateTime = $closedDateTime;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getCustodians(): array
    {
        return $this->custodians;
    }

    public function setCustodians(array $custodians): self
    {
        $this->custodians = $custodians;
        return $this;
    }

    public function getNoncustodialDataSources(): array
    {
        return $this->noncustodialDataSources;
    }

    public function setNoncustodialDataSources(array $noncustodialDataSources): self
    {
        $this->noncustodialDataSources = $noncustodialDataSources;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getReviewSets(): array
    {
        return $this->reviewSets;
    }

    public function setReviewSets(array $reviewSets): self
    {
        $this->reviewSets = $reviewSets;
        return $this;
    }

    public function getSearches(): array
    {
        return $this->searches;
    }

    public function setSearches(array $searches): self
    {
        $this->searches = $searches;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

}
