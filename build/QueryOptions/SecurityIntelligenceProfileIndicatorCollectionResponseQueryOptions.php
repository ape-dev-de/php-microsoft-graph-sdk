<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileIndicatorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityIntelligenceProfileIndicatorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityIntelligenceProfileIndicatorCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityIntelligenceProfileIndicatorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
