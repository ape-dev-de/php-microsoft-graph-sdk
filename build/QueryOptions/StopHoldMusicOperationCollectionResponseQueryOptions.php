<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StopHoldMusicOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StopHoldMusicOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StopHoldMusicOperationCollectionResponse properties
     * 
     * @param array<string> $select Use StopHoldMusicOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
