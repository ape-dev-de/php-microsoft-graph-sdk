<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PinnedChatMessageInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PinnedChatMessageInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PinnedChatMessageInfoCollectionResponse properties
     * 
     * @param array<string> $select Use PinnedChatMessageInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
