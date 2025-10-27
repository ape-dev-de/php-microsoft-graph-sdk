<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Participant
 */
class Participant
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ParticipantInfo $info = null;

    /** true if the participant is in lobby. */
    public ?bool $isInLobby = null;

    /** true if the participant is muted (client or server muted). */
    public ?bool $isMuted = null;

    /** 
     * The list of media streams.
     * @var MediaStream[]
     */
    public array $mediaStreams = [];

    /** A blob of data provided by the participant in the roster. */
    public ?string $metadata = null;

    /** 
     * Information about whether the participant has recording capability.
     * @var RecordingInfo|\stdClass|null
     */
    public RecordingInfo|\stdClass|null $recordingInfo = null;

    /** 
     * Indicates the reason why the participant was removed from the roster.
     * @var RemovedState|\stdClass|null
     */
    public RemovedState|\stdClass|null $removedState = null;

    /** 
     * Indicates the reason or reasons media content from this participant is restricted.
     * @var OnlineMeetingRestricted|\stdClass|null
     */
    public OnlineMeetingRestricted|\stdClass|null $restrictedExperience = null;

    /** Indicates the roster sequence number in which the participant was last updated. */
    public ?float $rosterSequenceNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['info'])) {
            $this->info = is_array($data['info']) ? new ParticipantInfo($data['info']) : $data['info'];
        }
        if (isset($data['isInLobby'])) {
            $this->isInLobby = $data['isInLobby'];
        }
        if (isset($data['isMuted'])) {
            $this->isMuted = $data['isMuted'];
        }
        if (isset($data['mediaStreams'])) {
            $this->mediaStreams = $data['mediaStreams'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['recordingInfo'])) {
            $this->recordingInfo = is_array($data['recordingInfo']) ? new RecordingInfo($data['recordingInfo']) : $data['recordingInfo'];
        }
        if (isset($data['removedState'])) {
            $this->removedState = is_array($data['removedState']) ? new RemovedState($data['removedState']) : $data['removedState'];
        }
        if (isset($data['restrictedExperience'])) {
            $this->restrictedExperience = is_array($data['restrictedExperience']) ? new OnlineMeetingRestricted($data['restrictedExperience']) : $data['restrictedExperience'];
        }
        if (isset($data['rosterSequenceNumber'])) {
            $this->rosterSequenceNumber = $data['rosterSequenceNumber'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
