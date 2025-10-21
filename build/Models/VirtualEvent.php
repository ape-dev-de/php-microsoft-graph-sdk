<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEvent
 */
class VirtualEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity information for the creator of the virtual event. Inherited from virtualEvent. */
        public ?CommunicationsIdentitySet $createdBy = null,
        /** A description of the virtual event. */
        public ?ItemBody $description = null,
        /** The display name of the virtual event. */
        public ?string $displayName = null,
        /** The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone. */
        public ?DateTimeTimeZone $endDateTime = null,
        /** The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null. */
        public array $externalEventInformation = [],
        /** The virtual event settings. */
        public ?VirtualEventSettings $settings = null,
        /** Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone. */
        public ?DateTimeTimeZone $startDateTime = null,
        /** The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue. */
        public ?VirtualEventStatus $status = null,
        /** The virtual event presenters. */
        public array $presenters = [],
        /** The sessions for the virtual event. */
        public array $sessions = []
    ) {}
}
