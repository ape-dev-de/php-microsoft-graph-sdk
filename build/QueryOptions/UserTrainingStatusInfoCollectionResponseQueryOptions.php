<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTrainingStatusInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserTrainingStatusInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserTrainingStatusInfoCollectionResponse properties
     * 
     * @param array<string> $select Use UserTrainingStatusInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
