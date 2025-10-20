<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewReviewerScopeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewReviewerScopeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewReviewerScopeCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewReviewerScopeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
