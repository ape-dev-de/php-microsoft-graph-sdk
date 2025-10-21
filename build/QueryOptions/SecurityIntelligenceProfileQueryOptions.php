<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfile resources
 *
 * Available select fields:
 * - aliases
 * - countriesOrRegionsOfOrigin
 * - description
 * - firstActiveDateTime
 * - kind
 * - summary
 * - targets
 * - title
 * - tradecraft
 * - indicators
 */
class SecurityIntelligenceProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIntelligenceProfile
     */
    public const FIELD_ALIASES = 'aliases';
    public const FIELD_COUNTRIES_OR_REGIONS_OF_ORIGIN = 'countriesOrRegionsOfOrigin';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_FIRST_ACTIVE_DATE_TIME = 'firstActiveDateTime';
    public const FIELD_KIND = 'kind';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_TARGETS = 'targets';
    public const FIELD_TITLE = 'title';
    public const FIELD_TRADECRAFT = 'tradecraft';
    public const FIELD_INDICATORS = 'indicators';

    /**
     * Select specific SecurityIntelligenceProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
