<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChallengingWord resources
 *
 * Available select fields:
 * - count
 * - word
 */
class ChallengingWordQueryOptions extends QueryOptions
{
    public const FIELD_COUNT = 'count';
    public const FIELD_WORD = 'word';

    /**
     * Select specific ChallengingWord properties
     * 
     * @param array<string> $select Use ChallengingWordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
