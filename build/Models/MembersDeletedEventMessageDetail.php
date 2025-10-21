<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembersDeletedEventMessageDetail
 */
class MembersDeletedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** @var string[] List of members deleted. */
        public array $members = []
    ) {}
}
