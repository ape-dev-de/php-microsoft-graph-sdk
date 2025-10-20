<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InviteParticipantsOperation resources
 *
 * Available select fields:
 * - participants
 */
class InviteParticipantsOperationQueryOptions extends QueryOptions
{
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific InviteParticipantsOperation properties
     * 
     * @param array<string> $select Use InviteParticipantsOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
