<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearch
 */
class SecurityEdiscoverySearch
{
    /**
     * When specified, the collection spans across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     */
    private ?string $dataSourceScopes;

    /**
     * Adds an additional source to the eDiscovery search.
     */
    private array $additionalSources = [];

    /**
     * Adds the results of the eDiscovery search to the specified reviewSet.
     */
    private ?string $addToReviewSetOperation;

    /**
     * Custodian sources that are included in the eDiscovery search.
     */
    private array $custodianSources = [];

    /**
     * The last estimate operation associated with the eDiscovery search.
     */
    private ?string $lastEstimateStatisticsOperation;

    /**
     * noncustodialDataSource sources that are included in the eDiscovery search
     * @var string[]
     */
    private array $noncustodialSources = [];


    public function getDataSourceScopes(): ?string
    {
        return $this->dataSourceScopes;
    }

    public function setDataSourceScopes(?string $dataSourceScopes): self
    {
        $this->dataSourceScopes = $dataSourceScopes;
        return $this;
    }

    public function getAdditionalSources(): array
    {
        return $this->additionalSources;
    }

    public function setAdditionalSources(array $additionalSources): self
    {
        $this->additionalSources = $additionalSources;
        return $this;
    }

    public function getAddToReviewSetOperation(): ?string
    {
        return $this->addToReviewSetOperation;
    }

    public function setAddToReviewSetOperation(?string $addToReviewSetOperation): self
    {
        $this->addToReviewSetOperation = $addToReviewSetOperation;
        return $this;
    }

    public function getCustodianSources(): array
    {
        return $this->custodianSources;
    }

    public function setCustodianSources(array $custodianSources): self
    {
        $this->custodianSources = $custodianSources;
        return $this;
    }

    public function getLastEstimateStatisticsOperation(): ?string
    {
        return $this->lastEstimateStatisticsOperation;
    }

    public function setLastEstimateStatisticsOperation(?string $lastEstimateStatisticsOperation): self
    {
        $this->lastEstimateStatisticsOperation = $lastEstimateStatisticsOperation;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNoncustodialSources(): array
    {
        return $this->noncustodialSources;
    }

    /**
     * @param string[] $noncustodialSources
     */
    public function setNoncustodialSources(array $noncustodialSources): self
    {
        $this->noncustodialSources = $noncustodialSources;
        return $this;
    }

}
