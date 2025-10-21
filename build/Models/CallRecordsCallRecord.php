<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsCallRecord
 */
class CallRecordsCallRecord
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $endDateTime = null,
        /** Meeting URL associated to the call. May not be available for a peerToPeer call record type. */
        public ?string $joinWebUrl = null,
        /** UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue. */
        public array $modalities = [],
        /** The organizing party's identity. The organizer property is deprecated and will stop returning data on June 30, 2026. Going forward, use the organizer_v2 relationship. */
        public ?string $organizer = null,
        /** List of distinct identities involved in the call. Limited to 130 entries. The participants property is deprecated and will stop returning data on June 30, 2026. Going forward, use the participants_v2 relationship. */
        public array $participants = [],
        /** UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $type = null,
        /** Monotonically increasing version of the call record. Higher version call records with the same id includes additional data compared to the lower version. */
        public ?float $version = null,
        /** Identity of the organizer of the call. This relationship is expanded by default in callRecord methods. */
        public ?string $organizer_v2 = null,
        /** List of distinct participants in the call. */
        public array $participants_v2 = [],
        /** List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable. */
        public array $sessions = []
    ) {}
}
