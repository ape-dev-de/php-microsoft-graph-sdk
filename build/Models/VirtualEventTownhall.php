<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventTownhall
 */
class VirtualEventTownhall
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity information for the creator of the virtual event. Inherited from virtualEvent. */
        public ?string $createdBy = null,
        /** A description of the virtual event. */
        public ?string $description = null,
        /** The display name of the virtual event. */
        public ?string $displayName = null,
        /** The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone. */
        public ?string $endDateTime = null,
        /** The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null. */
        public array $externalEventInformation = [],
        /** The virtual event settings. */
        public ?string $settings = null,
        /** Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone. */
        public ?string $startDateTime = null,
        /** The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue. */
        public ?string $status = null,
        /** The virtual event presenters. */
        public array $presenters = [],
        /** The sessions for the virtual event. */
        public array $sessions = [],
        /** The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue. */
        public ?string $audience = null,
        /** Identity information of the coorganizers of the town hall. */
        public array $coOrganizers = [],
        /** The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity. */
        public array $invitedAttendees = [],
        /** Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization. */
        public ?bool $isInviteOnly = null
    ) {}
}
