<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearch
 */
class SecurityEdiscoverySearch
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contentQuery'])) {
            $this->contentQuery = $data['contentQuery'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['dataSourceScopes'])) {
            $this->dataSourceScopes = $data['dataSourceScopes'];
        }
        if (isset($data['additionalSources'])) {
            $this->additionalSources = $data['additionalSources'];
        }
        if (isset($data['addToReviewSetOperation'])) {
            $this->addToReviewSetOperation = $data['addToReviewSetOperation'];
        }
        if (isset($data['custodianSources'])) {
            $this->custodianSources = $data['custodianSources'];
        }
        if (isset($data['lastEstimateStatisticsOperation'])) {
            $this->lastEstimateStatisticsOperation = $data['lastEstimateStatisticsOperation'];
        }
        if (isset($data['noncustodialSources'])) {
            $this->noncustodialSources = $data['noncustodialSources'];
        }
    }
}
