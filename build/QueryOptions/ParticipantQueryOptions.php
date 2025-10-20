<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Participant resources
 *
 * Available select fields:
 * - info
 * - isInLobby
 * - isMuted
 * - mediaStreams
 * - metadata
 * - recordingInfo
 * - removedState
 * - restrictedExperience
 * - rosterSequenceNumber
 */
class ParticipantQueryOptions extends QueryOptions
{
    public const FIELD_INFO = 'info';
    public const FIELD_IS_IN_LOBBY = 'isInLobby';
    public const FIELD_IS_MUTED = 'isMuted';
    public const FIELD_MEDIA_STREAMS = 'mediaStreams';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_RECORDING_INFO = 'recordingInfo';
    public const FIELD_REMOVED_STATE = 'removedState';
    public const FIELD_RESTRICTED_EXPERIENCE = 'restrictedExperience';
    public const FIELD_ROSTER_SEQUENCE_NUMBER = 'rosterSequenceNumber';

    /**
     * Select specific Participant properties
     * 
     * @param array<string> $select Use ParticipantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
