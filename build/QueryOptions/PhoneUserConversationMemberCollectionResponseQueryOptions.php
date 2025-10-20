<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhoneUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PhoneUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PhoneUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use PhoneUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
