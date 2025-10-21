<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Calendar
 */
class Calendar
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness. */
        public array $allowedOnlineMeetingProviders = [],
        /** true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who shared a calendar and granted write access. */
        public ?bool $canEdit = null,
        /** true if the user has permission to share the calendar, false otherwise. Only the user who created the calendar can share it. */
        public ?bool $canShare = null,
        /** If true, the user can read calendar items that have been marked private, false otherwise. */
        public ?bool $canViewPrivateItems = null,
        /** Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
        public ?string $changeKey = null,
        /** Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor. */
        public ?string $color = null,
        /** The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness. */
        public ?string $defaultOnlineMeetingProvider = null,
        /** The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is empty. Read-only. */
        public ?string $hexColor = null,
        /** true if this is the default calendar where new events are created by default, false otherwise. */
        public ?bool $isDefaultCalendar = null,
        /** Indicates whether this user calendar can be deleted from the user mailbox. */
        public ?bool $isRemovable = null,
        /** Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses. */
        public ?bool $isTallyingResponses = null,
        /** The calendar name. */
        public ?string $name = null,
        /** If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user. */
        public ?string $owner = null,
        /** The permissions of the users with whom the calendar is shared. */
        public array $calendarPermissions = [],
        /** The calendar view for the calendar. Navigation property. Read-only. */
        public array $calendarView = [],
        /** The events in the calendar. Navigation property. Read-only. */
        public array $events = [],
        /** The collection of multi-value extended properties defined for the calendar. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** @var string[] The collection of single-value extended properties defined for the calendar. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
