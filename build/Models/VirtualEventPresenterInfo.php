<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenterInfo
 */
class VirtualEventPresenterInfo
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
     * 
     * @var VirtualEventPresenterDetails|\stdClass|null
     */
    public mixed $presenterDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identity'])) {
            $this->identity = is_array($data['identity']) ? new IdentitySet($data['identity']) : $data['identity'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new OnlineMeetingRole($data['role']) : $data['role'];
        }
        if (isset($data['upn'])) {
            $this->upn = $data['upn'];
        }
        if (isset($data['presenterDetails'])) {
            $this->presenterDetails = is_array($data['presenterDetails']) ? new VirtualEventPresenterDetails($data['presenterDetails']) : $data['presenterDetails'];
        }
    }
}
