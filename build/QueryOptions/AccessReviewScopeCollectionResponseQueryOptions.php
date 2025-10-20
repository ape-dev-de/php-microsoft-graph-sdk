<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScopeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewScopeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewScopeCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewScopeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
