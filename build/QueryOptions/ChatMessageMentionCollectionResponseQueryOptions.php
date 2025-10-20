<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageMentionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChatMessageMentionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChatMessageMentionCollectionResponse properties
     * 
     * @param array<string> $select Use ChatMessageMentionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
