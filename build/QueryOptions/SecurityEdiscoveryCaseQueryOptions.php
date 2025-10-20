<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCase resources
 *
 * Available select fields:
 * - closedBy
 * - closedDateTime
 * - externalId
 * - custodians
 * - noncustodialDataSources
 * - operations
 * - reviewSets
 * - searches
 * - settings
 * - tags
 */
class SecurityEdiscoveryCaseQueryOptions extends QueryOptions
{
    public const FIELD_CLOSED_BY = 'closedBy';
    public const FIELD_CLOSED_DATE_TIME = 'closedDateTime';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_CUSTODIANS = 'custodians';
    public const FIELD_NONCUSTODIAL_DATA_SOURCES = 'noncustodialDataSources';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_REVIEW_SETS = 'reviewSets';
    public const FIELD_SEARCHES = 'searches';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_TAGS = 'tags';

    /**
     * Select specific SecurityEdiscoveryCase properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryCaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
