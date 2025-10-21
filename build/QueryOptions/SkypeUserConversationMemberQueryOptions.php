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
    /**
     * Available select fields for SkypeUserConversationMember
     */
    public const FIELD_SKYPE_ID = 'skypeId';

    /**
     * Select specific SkypeUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
