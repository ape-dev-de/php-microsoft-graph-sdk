<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Participant
 */
class Participant
{
    public function __construct(
        /**  */
        public ?string $info = null,
        /** true if the participant is in lobby. */
        public ?bool $isInLobby = null,
        /** true if the participant is muted (client or server muted). */
        public ?bool $isMuted = null,
        /** The list of media streams. */
        public array $mediaStreams = [],
        /** A blob of data provided by the participant in the roster. */
        public ?string $metadata = null,
        /** Information about whether the participant has recording capability. */
        public ?string $recordingInfo = null,
        /** Indicates the reason why the participant was removed from the roster. */
        public ?string $removedState = null,
        /** Indicates the reason or reasons media content from this participant is restricted. */
        public ?string $restrictedExperience = null,
        /** Indicates the roster sequence number in which the participant was last updated. */
        public ?string $rosterSequenceNumber = null
    ) {}
}
