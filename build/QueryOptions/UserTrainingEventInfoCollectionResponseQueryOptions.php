<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTrainingEventInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserTrainingEventInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserTrainingEventInfoCollectionResponse properties
     * 
     * @param array<string> $select Use UserTrainingEventInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
