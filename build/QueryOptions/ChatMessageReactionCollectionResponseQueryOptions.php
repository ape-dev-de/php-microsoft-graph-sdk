<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageReactionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChatMessageReactionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChatMessageReactionCollectionResponse properties
     * 
     * @param array<string> $select Use ChatMessageReactionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
