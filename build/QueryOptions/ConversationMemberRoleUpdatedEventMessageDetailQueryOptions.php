<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationMemberRoleUpdatedEventMessageDetail resources
 *
 * Available select fields:
 */
class ConversationMemberRoleUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConversationMemberRoleUpdatedEventMessageDetail
     */

    /**
     * Select specific ConversationMemberRoleUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
