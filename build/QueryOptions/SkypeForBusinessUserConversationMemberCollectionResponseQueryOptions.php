<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SkypeForBusinessUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SkypeForBusinessUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SkypeForBusinessUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use SkypeForBusinessUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
