<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AnonymousGuestConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AnonymousGuestConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AnonymousGuestConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use AnonymousGuestConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
