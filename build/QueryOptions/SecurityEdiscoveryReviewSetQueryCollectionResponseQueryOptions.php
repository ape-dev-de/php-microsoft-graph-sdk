<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewSetQueryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryReviewSetQueryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryReviewSetQueryCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryReviewSetQueryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
