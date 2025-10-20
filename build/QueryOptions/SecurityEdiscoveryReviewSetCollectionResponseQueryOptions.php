<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewSetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryReviewSetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryReviewSetCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryReviewSetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
