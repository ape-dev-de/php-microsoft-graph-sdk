<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamMembersNotificationRecipient resources
 *
 * Available select fields:
 * - teamId
 */
class TeamMembersNotificationRecipientQueryOptions extends QueryOptions
{
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamMembersNotificationRecipient properties
     * 
     * @param array<string> $select Use TeamMembersNotificationRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
