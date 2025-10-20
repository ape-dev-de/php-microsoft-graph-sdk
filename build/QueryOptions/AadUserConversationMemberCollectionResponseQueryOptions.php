<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AadUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AadUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use AadUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
