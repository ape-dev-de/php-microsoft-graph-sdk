<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use ConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
