<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScheduleDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewScheduleDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewScheduleDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewScheduleDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
