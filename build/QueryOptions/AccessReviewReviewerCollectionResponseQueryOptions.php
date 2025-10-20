<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewReviewerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewReviewerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewReviewerCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewReviewerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
