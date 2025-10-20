<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventTownhall resources
 *
 * Available select fields:
 * - audience
 * - coOrganizers
 * - invitedAttendees
 * - isInviteOnly
 */
class VirtualEventTownhallQueryOptions extends QueryOptions
{
    public const FIELD_AUDIENCE = 'audience';
    public const FIELD_CO_ORGANIZERS = 'coOrganizers';
    public const FIELD_INVITED_ATTENDEES = 'invitedAttendees';
    public const FIELD_IS_INVITE_ONLY = 'isInviteOnly';

    /**
     * Select specific VirtualEventTownhall properties
     * 
     * @param array<string> $select Use VirtualEventTownhallQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
