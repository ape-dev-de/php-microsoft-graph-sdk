<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingParticipantInfo resources
 *
 * Available select fields:
 * - identity
 * - role
 * - upn
 */
class MeetingParticipantInfoQueryOptions extends QueryOptions
{
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_ROLE = 'role';
    public const FIELD_UPN = 'upn';

    /**
     * Select specific MeetingParticipantInfo properties
     * 
     * @param array<string> $select Use MeetingParticipantInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
