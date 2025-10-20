<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEventPropagationResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEventPropagationResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEventPropagationResultCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEventPropagationResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
