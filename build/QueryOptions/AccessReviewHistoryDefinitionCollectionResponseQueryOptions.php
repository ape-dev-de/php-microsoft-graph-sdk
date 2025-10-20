<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewHistoryDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewHistoryDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewHistoryDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
