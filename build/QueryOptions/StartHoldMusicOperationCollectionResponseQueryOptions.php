<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StartHoldMusicOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StartHoldMusicOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StartHoldMusicOperationCollectionResponse properties
     * 
     * @param array<string> $select Use StartHoldMusicOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
