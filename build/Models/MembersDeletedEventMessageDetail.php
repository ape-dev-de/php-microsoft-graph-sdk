<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersDeletedEventMessageDetail
 */
class MembersDeletedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** 
     * List of members deleted.
     * @var TeamworkUserIdentity[]
     */
    public array $members = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
    }
}
