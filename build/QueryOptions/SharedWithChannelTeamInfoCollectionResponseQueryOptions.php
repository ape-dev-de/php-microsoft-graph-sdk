<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedWithChannelTeamInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharedWithChannelTeamInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharedWithChannelTeamInfoCollectionResponse properties
     * 
     * @param array<string> $select Use SharedWithChannelTeamInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
