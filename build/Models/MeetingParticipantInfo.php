<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipantInfo
 */
class MeetingParticipantInfo
{
    /** 
     * Identity information of the participant.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $identity = null;

    /** 
     * Specifies the participant's role in the meeting.
     * @var OnlineMeetingRole|\stdClass|null
     */
    public mixed $role = null;

    /** User principal name of the participant. */
    public ?string $upn = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
        if (isset($data['role'])) {
            $this->role = $data['role'];
        }
        if (isset($data['upn'])) {
            $this->upn = $data['upn'];
        }
    }
}
