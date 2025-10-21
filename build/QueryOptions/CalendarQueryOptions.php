<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Calendar resources
 *
 * Available select fields:
 * - allowedOnlineMeetingProviders
 * - canEdit
 * - canShare
 * - canViewPrivateItems
 * - changeKey
 * - color
 * - defaultOnlineMeetingProvider
 * - hexColor
 * - isDefaultCalendar
 * - isRemovable
 * - isTallyingResponses
 * - name
 * - owner
 * - calendarPermissions
 * - calendarView
 * - events
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class CalendarQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Calendar
     */
    public const FIELD_ALLOWED_ONLINE_MEETING_PROVIDERS = 'allowedOnlineMeetingProviders';
    public const FIELD_CAN_EDIT = 'canEdit';
    public const FIELD_CAN_SHARE = 'canShare';
    public const FIELD_CAN_VIEW_PRIVATE_ITEMS = 'canViewPrivateItems';
    public const FIELD_CHANGE_KEY = 'changeKey';
    public const FIELD_COLOR = 'color';
    public const FIELD_DEFAULT_ONLINE_MEETING_PROVIDER = 'defaultOnlineMeetingProvider';
    public const FIELD_HEX_COLOR = 'hexColor';
    public const FIELD_IS_DEFAULT_CALENDAR = 'isDefaultCalendar';
    public const FIELD_IS_REMOVABLE = 'isRemovable';
    public const FIELD_IS_TALLYING_RESPONSES = 'isTallyingResponses';
    public const FIELD_NAME = 'name';
    public const FIELD_OWNER = 'owner';
    public const FIELD_CALENDAR_PERMISSIONS = 'calendarPermissions';
    public const FIELD_CALENDAR_VIEW = 'calendarView';
    public const FIELD_EVENTS = 'events';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific Calendar properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
