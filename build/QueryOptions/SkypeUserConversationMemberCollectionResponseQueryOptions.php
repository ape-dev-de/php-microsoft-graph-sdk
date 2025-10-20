<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SkypeUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SkypeUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SkypeUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use SkypeUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
