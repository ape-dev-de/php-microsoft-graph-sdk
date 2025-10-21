<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingBusiness resources
 *
 * Available select fields:
 * - address
 * - bookingPageSettings
 * - businessHours
 * - businessType
 * - createdDateTime
 * - defaultCurrencyIso
 * - displayName
 * - email
 * - isPublished
 * - languageTag
 * - lastUpdatedDateTime
 * - phone
 * - publicUrl
 * - schedulingPolicy
 * - webSiteUrl
 * - appointments
 * - calendarView
 * - customers
 * - customQuestions
 * - services
 * - staffMembers
 */
class BookingBusinessQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingBusiness
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_BOOKING_PAGE_SETTINGS = 'bookingPageSettings';
    public const FIELD_BUSINESS_HOURS = 'businessHours';
    public const FIELD_BUSINESS_TYPE = 'businessType';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEFAULT_CURRENCY_ISO = 'defaultCurrencyIso';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_IS_PUBLISHED = 'isPublished';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_PHONE = 'phone';
    public const FIELD_PUBLIC_URL = 'publicUrl';
    public const FIELD_SCHEDULING_POLICY = 'schedulingPolicy';
    public const FIELD_WEB_SITE_URL = 'webSiteUrl';
    public const FIELD_APPOINTMENTS = 'appointments';
    public const FIELD_CALENDAR_VIEW = 'calendarView';
    public const FIELD_CUSTOMERS = 'customers';
    public const FIELD_CUSTOM_QUESTIONS = 'customQuestions';
    public const FIELD_SERVICES = 'services';
    public const FIELD_STAFF_MEMBERS = 'staffMembers';

    /**
     * Select specific BookingBusiness properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
