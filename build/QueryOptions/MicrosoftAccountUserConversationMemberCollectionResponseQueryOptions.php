<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAccountUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftAccountUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftAccountUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftAccountUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
