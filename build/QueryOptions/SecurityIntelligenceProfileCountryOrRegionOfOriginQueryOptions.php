<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileCountryOrRegionOfOrigin resources
 *
 * Available select fields:
 * - code
 * - label
 */
class SecurityIntelligenceProfileCountryOrRegionOfOriginQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_LABEL = 'label';

    /**
     * Select specific SecurityIntelligenceProfileCountryOrRegionOfOrigin properties
     * 
     * @param array<string> $select Use SecurityIntelligenceProfileCountryOrRegionOfOriginQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
