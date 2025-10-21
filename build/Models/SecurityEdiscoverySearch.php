<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearch
 */
class SecurityEdiscoverySearch
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $contentQuery = null,
        /**  */
        public ?IdentitySet $createdBy = null,
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?IdentitySet $lastModifiedBy = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** When specified, the collection spans across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources. */
        public ?SecurityDataSourceScopes $dataSourceScopes = null,
        /** Adds an additional source to the eDiscovery search. */
        public array $additionalSources = [],
        /** Adds the results of the eDiscovery search to the specified reviewSet. */
        public ?SecurityEdiscoveryAddToReviewSetOperation $addToReviewSetOperation = null,
        /** Custodian sources that are included in the eDiscovery search. */
        public array $custodianSources = [],
        /** The last estimate operation associated with the eDiscovery search. */
        public ?SecurityEdiscoveryEstimateOperation $lastEstimateStatisticsOperation = null,
        /** noncustodialDataSource sources that are included in the eDiscovery search */
        public array $noncustodialSources = []
    ) {}
}
