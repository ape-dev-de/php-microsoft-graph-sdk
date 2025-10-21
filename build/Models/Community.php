<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Community
 */
class Community
{
    public function __construct(
        /** The description of the community. The maximum length is 1,024 characters. */
        public ?string $description = null,
        /** The name of the community. The maximum length is 255 characters. */
        public ?string $displayName = null,
        /** The ID of the Microsoft 365 group that manages the membership of this community. */
        public ?string $groupId = null,
        /**  */
        public ?string $privacy = null,
        /** The Microsoft 365 group that manages the membership of this community. */
        public ?string $group = null,
        /** @var string[] Represents a community in Viva Engage that is a central place for conversations,\nfiles, events, and updates for people sharing a common interest or goal. */
        public array $owners = []
    ) {}
}
