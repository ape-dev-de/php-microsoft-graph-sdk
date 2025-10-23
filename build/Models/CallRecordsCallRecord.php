<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsCallRecord
 */
class CallRecordsCallRecord
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $endDateTime = null;

    /** Meeting URL associated to the call. May not be available for a peerToPeer call record type. */
    public ?string $joinWebUrl = null;

    /** UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @var CallRecordsModality[]
     */
    public array $modalities = [];

    /** 
     * The organizing party's identity. The organizer property is deprecated and will stop returning data on June 30, 2026. Going forward, use the organizer_v2 relationship.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $organizer = null;

    /** 
     * List of distinct identities involved in the call. Limited to 130 entries. The participants property is deprecated and will stop returning data on June 30, 2026. Going forward, use the participants_v2 relationship.
     * @var IdentitySet[]
     */
    public array $participants = [];

    /** UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?CallRecordsCallType $type = null;

    /** Monotonically increasing version of the call record. Higher version call records with the same id includes additional data compared to the lower version. */
    public ?float $version = null;

    /** 
     * Identity of the organizer of the call. This relationship is expanded by default in callRecord methods.
     * @var CallRecordsOrganizer|\stdClass|null
     */
    public mixed $organizer_v2 = null;

    /** 
     * List of distinct participants in the call.
     * @var CallRecordsParticipant[]
     */
    public array $participants_v2 = [];

    /** 
     * List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
     * @var CallRecordsSession[]
     */
    public array $sessions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['joinWebUrl'])) {
            $this->joinWebUrl = $data['joinWebUrl'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['modalities'])) {
            $this->modalities = $data['modalities'];
        }
        if (isset($data['organizer'])) {
            $this->organizer = $data['organizer'];
        }
        if (isset($data['participants'])) {
            $this->participants = $data['participants'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['organizer_v2'])) {
            $this->organizer_v2 = $data['organizer_v2'];
        }
        if (isset($data['participants_v2'])) {
            $this->participants_v2 = $data['participants_v2'];
        }
        if (isset($data['sessions'])) {
            $this->sessions = $data['sessions'];
        }
    }
}
