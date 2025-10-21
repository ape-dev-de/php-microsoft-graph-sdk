<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Community
 */
class Community
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The description of the community. The maximum length is 1,024 characters. */
        public ?string $description = null,
        /** The name of the community. The maximum length is 255 characters. */
        public ?string $displayName = null,
        /** The ID of the Microsoft 365 group that manages the membership of this community. */
        public ?string $groupId = null,
        /**  */
        public ?CommunityPrivacy $privacy = null,
        /** The Microsoft 365 group that manages the membership of this community. */
        public ?Group $group = null,
        /** The admins of the community. Limited to 100 users. If this property isn't specified when you create the community, the calling user is automatically assigned as the community owner. */
        public array $owners = []
    ) {}
}
