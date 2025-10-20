<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityIntelligenceProfileCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityIntelligenceProfileCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityIntelligenceProfileCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
