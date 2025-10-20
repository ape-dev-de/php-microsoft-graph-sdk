<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
