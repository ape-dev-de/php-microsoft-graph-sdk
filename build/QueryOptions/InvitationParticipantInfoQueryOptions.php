<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvitationParticipantInfo resources
 *
 * Available select fields:
 * - hidden
 * - identity
 * - participantId
 * - removeFromDefaultAudioRoutingGroup
 * - replacesCallId
 */
class InvitationParticipantInfoQueryOptions extends QueryOptions
{
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_PARTICIPANT_ID = 'participantId';
    public const FIELD_REMOVE_FROM_DEFAULT_AUDIO_ROUTING_GROUP = 'removeFromDefaultAudioRoutingGroup';
    public const FIELD_REPLACES_CALL_ID = 'replacesCallId';

    /**
     * Select specific InvitationParticipantInfo properties
     * 
     * @param array<string> $select Use InvitationParticipantInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
