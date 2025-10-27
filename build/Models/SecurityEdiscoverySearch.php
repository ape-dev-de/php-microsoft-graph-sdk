<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearch
 */
class SecurityEdiscoverySearch
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $contentQuery = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /**  */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * When specified, the collection spans across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @var SecurityDataSourceScopes|\stdClass|null
     */
    public mixed $dataSourceScopes = null;

    /** 
     * Adds an additional source to the eDiscovery search.
     * @var SecurityDataSource[]
     */
    public array $additionalSources = [];

    /** 
     * Adds the results of the eDiscovery search to the specified reviewSet.
     * @var SecurityEdiscoveryAddToReviewSetOperation|\stdClass|null
     */
    public mixed $addToReviewSetOperation = null;

    /** 
     * Custodian sources that are included in the eDiscovery search.
     * @var SecurityDataSource[]
     */
    public array $custodianSources = [];

    /** 
     * The last estimate operation associated with the eDiscovery search.
     * @var SecurityEdiscoveryEstimateOperation|\stdClass|null
     */
    public mixed $lastEstimateStatisticsOperation = null;

    /** 
     * noncustodialDataSource sources that are included in the eDiscovery search
     * @var SecurityEdiscoveryNoncustodialDataSource[]
     */
    public array $noncustodialSources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contentQuery'])) {
            $this->contentQuery = $data['contentQuery'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['dataSourceScopes'])) {
            $this->dataSourceScopes = is_array($data['dataSourceScopes']) ? new SecurityDataSourceScopes($data['dataSourceScopes']) : $data['dataSourceScopes'];
        }
        if (isset($data['additionalSources'])) {
            $this->additionalSources = $data['additionalSources'];
        }
        if (isset($data['addToReviewSetOperation'])) {
            $this->addToReviewSetOperation = is_array($data['addToReviewSetOperation']) ? new SecurityEdiscoveryAddToReviewSetOperation($data['addToReviewSetOperation']) : $data['addToReviewSetOperation'];
        }
        if (isset($data['custodianSources'])) {
            $this->custodianSources = $data['custodianSources'];
        }
        if (isset($data['lastEstimateStatisticsOperation'])) {
            $this->lastEstimateStatisticsOperation = is_array($data['lastEstimateStatisticsOperation']) ? new SecurityEdiscoveryEstimateOperation($data['lastEstimateStatisticsOperation']) : $data['lastEstimateStatisticsOperation'];
        }
        if (isset($data['noncustodialSources'])) {
            $this->noncustodialSources = $data['noncustodialSources'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
