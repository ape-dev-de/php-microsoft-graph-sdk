<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersLeftEventMessageDetail
 */
class MembersLeftEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** List of members who left the chat. */
        public array $members = []
    ) {}
}
