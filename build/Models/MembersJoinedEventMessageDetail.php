<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersJoinedEventMessageDetail
 */
class MembersJoinedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** List of members who joined the chat. */
        public array $members = []
    ) {}
}
