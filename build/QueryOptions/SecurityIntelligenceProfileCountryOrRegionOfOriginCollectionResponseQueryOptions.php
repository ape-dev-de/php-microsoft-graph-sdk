<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileCountryOrRegionOfOriginCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityIntelligenceProfileCountryOrRegionOfOriginCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityIntelligenceProfileCountryOrRegionOfOriginCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityIntelligenceProfileCountryOrRegionOfOriginCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
