<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsCallRecord
 */
class CallRecordsCallRecord
{
    /**
     * UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Meeting URL associated to the call. May not be available for a peerToPeer call record type.
     */
    private ?string $joinWebUrl;

    /**
     * UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     */
    private array $modalities = [];

    /**
     * The organizing party''s identity. The organizer property is deprecated and will stop returning data on June 30, 2026. Going forward, use the organizer_v2 relationship.
     */
    private ?string $organizer;

    /**
     * List of distinct identities involved in the call. Limited to 130 entries. The participants property is deprecated and will stop returning data on June 30, 2026. Going forward, use the participants_v2 relationship.
     */
    private array $participants = [];

    /**
     * UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     */
    private ?string $type;

    /**
     * Monotonically increasing version of the call record. Higher version call records with the same id includes additional data compared to the lower version.
     */
    private ?float $version;

    /**
     * Identity of the organizer of the call. This relationship is expanded by default in callRecord methods.
     */
    private ?string $organizer_v2;

    /**
     * List of distinct participants in the call.
     */
    private array $participants_v2 = [];

    /**
     * List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
     */
    private ?string $sessions;

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getJoinWebUrl(): ?string
    {
        return $this->joinWebUrl;
    }

    public function setJoinWebUrl(?string $joinWebUrl): self
    {
        $this->joinWebUrl = $joinWebUrl;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getModalities(): array
    {
        return $this->modalities;
    }

    public function setModalities(array $modalities): self
    {
        $this->modalities = $modalities;
        return $this;
    }

    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }

    public function setOrganizer(?string $organizer): self
    {
        $this->organizer = $organizer;
        return $this;
    }

    public function getParticipants(): array
    {
        return $this->participants;
    }

    public function setParticipants(array $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getVersion(): ?float
    {
        return $this->version;
    }

    public function setVersion(?float $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getOrganizer_v2(): ?string
    {
        return $this->organizer_v2;
    }

    public function setOrganizer_v2(?string $organizer_v2): self
    {
        $this->organizer_v2 = $organizer_v2;
        return $this;
    }

    public function getParticipants_v2(): array
    {
        return $this->participants_v2;
    }

    public function setParticipants_v2(array $participants_v2): self
    {
        $this->participants_v2 = $participants_v2;
        return $this;
    }

    public function getSessions(): ?string
    {
        return $this->sessions;
    }

    public function setSessions(?string $sessions): self
    {
        $this->sessions = $sessions;
        return $this;
    }

}
