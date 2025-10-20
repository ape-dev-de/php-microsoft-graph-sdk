<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChallengingWordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChallengingWordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChallengingWordCollectionResponse properties
     * 
     * @param array<string> $select Use ChallengingWordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
