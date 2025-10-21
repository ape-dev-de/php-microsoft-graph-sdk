<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamMembersNotificationRecipient resources
 *
 * Available select fields:
 */
class TeamMembersNotificationRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamMembersNotificationRecipient
     */

    /**
     * Select specific TeamMembersNotificationRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
