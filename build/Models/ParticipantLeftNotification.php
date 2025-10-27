<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantLeftNotification
 */
class ParticipantLeftNotification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** ID of the participant under the policy who has left the meeting. */
    public ?string $participantId = null;

    /** 
     * 
     * @var Call|\stdClass|null
     */
    public Call|\stdClass|null $call = null;


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
        if (isset($data['participantId'])) {
            $this->participantId = $data['participantId'];
        }
        if (isset($data['call'])) {
            $this->call = is_array($data['call']) ? new Call($data['call']) : $data['call'];
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
