<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SkypeUserConversationMember resources
 *
 * Available select fields:
 * - skypeId
 */
class SkypeUserConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_SKYPE_ID = 'skypeId';

    /**
     * Select specific SkypeUserConversationMember properties
     * 
     * @param array<string> $select Use SkypeUserConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
