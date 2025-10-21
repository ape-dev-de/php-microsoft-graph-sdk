<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventTownhall
 */
class VirtualEventTownhall
{
    public function __construct(
        /** The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue. */
        public ?string $audience = null,
        /** Identity information of the coorganizers of the town hall. */
        public array $coOrganizers = [],
        /** The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity. */
        public array $invitedAttendees = [],
        /** Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization. */
        public ?string $isInviteOnly = null
    ) {}
}
