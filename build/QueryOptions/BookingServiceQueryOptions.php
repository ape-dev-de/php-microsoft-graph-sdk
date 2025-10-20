<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingService resources
 *
 * Available select fields:
 * - additionalInformation
 * - createdDateTime
 * - customQuestions
 * - defaultDuration
 * - defaultLocation
 * - defaultPrice
 * - defaultPriceType
 * - defaultReminders
 * - description
 * - displayName
 * - isAnonymousJoinEnabled
 * - isCustomerAllowedToManageBooking
 * - isHiddenFromCustomers
 * - isLocationOnline
 * - languageTag
 * - lastUpdatedDateTime
 * - maximumAttendeesCount
 * - notes
 * - postBuffer
 * - preBuffer
 * - schedulingPolicy
 * - smsNotificationsEnabled
 * - staffMemberIds
 * - webUrl
 */
class BookingServiceQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_INFORMATION = 'additionalInformation';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_QUESTIONS = 'customQuestions';
    public const FIELD_DEFAULT_DURATION = 'defaultDuration';
    public const FIELD_DEFAULT_LOCATION = 'defaultLocation';
    public const FIELD_DEFAULT_PRICE = 'defaultPrice';
    public const FIELD_DEFAULT_PRICE_TYPE = 'defaultPriceType';
    public const FIELD_DEFAULT_REMINDERS = 'defaultReminders';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ANONYMOUS_JOIN_ENABLED = 'isAnonymousJoinEnabled';
    public const FIELD_IS_CUSTOMER_ALLOWED_TO_MANAGE_BOOKING = 'isCustomerAllowedToManageBooking';
    public const FIELD_IS_HIDDEN_FROM_CUSTOMERS = 'isHiddenFromCustomers';
    public const FIELD_IS_LOCATION_ONLINE = 'isLocationOnline';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_MAXIMUM_ATTENDEES_COUNT = 'maximumAttendeesCount';
    public const FIELD_NOTES = 'notes';
    public const FIELD_POST_BUFFER = 'postBuffer';
    public const FIELD_PRE_BUFFER = 'preBuffer';
    public const FIELD_SCHEDULING_POLICY = 'schedulingPolicy';
    public const FIELD_SMS_NOTIFICATIONS_ENABLED = 'smsNotificationsEnabled';
    public const FIELD_STAFF_MEMBER_IDS = 'staffMemberIds';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific BookingService properties
     * 
     * @param array<string> $select Use BookingServiceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
