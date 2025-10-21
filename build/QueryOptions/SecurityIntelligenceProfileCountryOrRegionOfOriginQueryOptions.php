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
    /**
     * Available select fields for SecurityIntelligenceProfileCountryOrRegionOfOrigin
     */
    public const FIELD_CODE = 'code';
    public const FIELD_LABEL = 'label';

    /**
     * Select specific SecurityIntelligenceProfileCountryOrRegionOfOrigin properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
