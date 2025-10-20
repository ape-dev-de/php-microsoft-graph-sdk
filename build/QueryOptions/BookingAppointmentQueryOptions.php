<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingAppointment resources
 *
 * Available select fields:
 * - additionalInformation
 * - anonymousJoinWebUrl
 * - appointmentLabel
 * - createdDateTime
 * - customerEmailAddress
 * - customerName
 * - customerNotes
 * - customerPhone
 * - customers
 * - customerTimeZone
 * - duration
 * - endDateTime
 * - filledAttendeesCount
 * - isCustomerAllowedToManageBooking
 * - isLocationOnline
 * - joinWebUrl
 * - lastUpdatedDateTime
 * - maximumAttendeesCount
 * - optOutOfCustomerEmail
 * - postBuffer
 * - preBuffer
 * - price
 * - priceType
 * - reminders
 * - selfServiceAppointmentId
 * - serviceId
 * - serviceLocation
 * - serviceName
 * - serviceNotes
 * - smsNotificationsEnabled
 * - staffMemberIds
 * - startDateTime
 */
class BookingAppointmentQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_INFORMATION = 'additionalInformation';
    public const FIELD_ANONYMOUS_JOIN_WEB_URL = 'anonymousJoinWebUrl';
    public const FIELD_APPOINTMENT_LABEL = 'appointmentLabel';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOMER_EMAIL_ADDRESS = 'customerEmailAddress';
    public const FIELD_CUSTOMER_NAME = 'customerName';
    public const FIELD_CUSTOMER_NOTES = 'customerNotes';
    public const FIELD_CUSTOMER_PHONE = 'customerPhone';
    public const FIELD_CUSTOMERS = 'customers';
    public const FIELD_CUSTOMER_TIME_ZONE = 'customerTimeZone';
    public const FIELD_DURATION = 'duration';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FILLED_ATTENDEES_COUNT = 'filledAttendeesCount';
    public const FIELD_IS_CUSTOMER_ALLOWED_TO_MANAGE_BOOKING = 'isCustomerAllowedToManageBooking';
    public const FIELD_IS_LOCATION_ONLINE = 'isLocationOnline';
    public const FIELD_JOIN_WEB_URL = 'joinWebUrl';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_MAXIMUM_ATTENDEES_COUNT = 'maximumAttendeesCount';
    public const FIELD_OPT_OUT_OF_CUSTOMER_EMAIL = 'optOutOfCustomerEmail';
    public const FIELD_POST_BUFFER = 'postBuffer';
    public const FIELD_PRE_BUFFER = 'preBuffer';
    public const FIELD_PRICE = 'price';
    public const FIELD_PRICE_TYPE = 'priceType';
    public const FIELD_REMINDERS = 'reminders';
    public const FIELD_SELF_SERVICE_APPOINTMENT_ID = 'selfServiceAppointmentId';
    public const FIELD_SERVICE_ID = 'serviceId';
    public const FIELD_SERVICE_LOCATION = 'serviceLocation';
    public const FIELD_SERVICE_NAME = 'serviceName';
    public const FIELD_SERVICE_NOTES = 'serviceNotes';
    public const FIELD_SMS_NOTIFICATIONS_ENABLED = 'smsNotificationsEnabled';
    public const FIELD_STAFF_MEMBER_IDS = 'staffMemberIds';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific BookingAppointment properties
     * 
     * @param array<string> $select Use BookingAppointmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
