<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewInstanceDecisionItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewInstanceDecisionItemCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewInstanceDecisionItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
