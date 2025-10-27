<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipantInfo
 */
class MeetingParticipantInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Identity information of the participant.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $identity = null;

    /** 
     * Specifies the participant's role in the meeting.
     * @var OnlineMeetingRole|\stdClass|null
     */
    public OnlineMeetingRole|\stdClass|null $role = null;

    /** User principal name of the participant. */
    public ?string $upn = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['identity'])) {
            $this->identity = is_array($data['identity']) ? new IdentitySet($data['identity']) : $data['identity'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new OnlineMeetingRole($data['role']) : $data['role'];
        }
        if (isset($data['upn'])) {
            $this->upn = $data['upn'];
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
