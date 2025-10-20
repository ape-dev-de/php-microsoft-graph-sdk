<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewHistoryInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewHistoryInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewHistoryInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
