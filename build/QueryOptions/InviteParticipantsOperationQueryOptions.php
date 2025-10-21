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
    /**
     * Available select fields for InviteParticipantsOperation
     */
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific InviteParticipantsOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
