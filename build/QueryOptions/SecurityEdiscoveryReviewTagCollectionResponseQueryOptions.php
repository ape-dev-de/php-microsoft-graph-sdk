<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewTagCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryReviewTagCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryReviewTagCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryReviewTagCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
