<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamDescriptionUpdatedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamDescription
 * - teamId
 */
class TeamDescriptionUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_DESCRIPTION = 'teamDescription';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamDescriptionUpdatedEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamDescriptionUpdatedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
