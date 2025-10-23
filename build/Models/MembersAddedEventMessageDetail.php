<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersAddedEventMessageDetail
 */
class MembersAddedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** 
     * List of members added.
     * @var TeamworkUserIdentity[]
     */
    public array $members = [];

    /** The timestamp that denotes how far back a conversation's history is shared with the conversation members. */
    public ?\DateTimeInterface $visibleHistoryStartDateTime = null;


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
        if (isset($data['visibleHistoryStartDateTime'])) {
            $this->visibleHistoryStartDateTime = is_string($data['visibleHistoryStartDateTime']) ? new \DateTimeImmutable($data['visibleHistoryStartDateTime']) : $data['visibleHistoryStartDateTime'];
        }
    }
}
