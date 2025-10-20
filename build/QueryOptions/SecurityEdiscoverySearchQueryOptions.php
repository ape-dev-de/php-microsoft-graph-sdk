<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearch resources
 *
 * Available select fields:
 * - dataSourceScopes
 * - additionalSources
 * - addToReviewSetOperation
 * - custodianSources
 * - lastEstimateStatisticsOperation
 * - noncustodialSources
 */
class SecurityEdiscoverySearchQueryOptions extends QueryOptions
{
    public const FIELD_DATA_SOURCE_SCOPES = 'dataSourceScopes';
    public const FIELD_ADDITIONAL_SOURCES = 'additionalSources';
    public const FIELD_ADD_TO_REVIEW_SET_OPERATION = 'addToReviewSetOperation';
    public const FIELD_CUSTODIAN_SOURCES = 'custodianSources';
    public const FIELD_LAST_ESTIMATE_STATISTICS_OPERATION = 'lastEstimateStatisticsOperation';
    public const FIELD_NONCUSTODIAL_SOURCES = 'noncustodialSources';

    /**
     * Select specific SecurityEdiscoverySearch properties
     * 
     * @param array<string> $select Use SecurityEdiscoverySearchQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
