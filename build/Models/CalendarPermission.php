<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarPermission
 */
class CalendarPermission
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom. */
        public array $allowedRoles = [],
        /** Represents a share recipient or delegate who has access to the calendar. For the ''My Organization'' share recipient, the address property is null. Read-only. */
        public ?string $emailAddress = null,
        /** True if the user in context (recipient or delegate) is inside the same organization as the calendar owner. */
        public ?bool $isInsideOrganization = null,
        /** True if the user can be removed from the list of recipients or delegates for the specified calendar, false otherwise. The ''My organization'' user determines the permissions other people within your organization have to the given calendar. You can''t remove ''My organization'' as a share recipient to a calendar. */
        public ?bool $isRemovable = null,
        /** Current permission level of the calendar share recipient or delegate. */
        public ?string $role = null
    ) {}
}
