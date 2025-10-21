<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersAddedEventMessageDetail
 */
class MembersAddedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** List of members added. */
        public array $members = [],
        /** The timestamp that denotes how far back a conversation's history is shared with the conversation members. */
        public ?\DateTimeInterface $visibleHistoryStartDateTime = null
    ) {}
}
