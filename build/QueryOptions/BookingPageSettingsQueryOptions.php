<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingPageSettings resources
 *
 * Available select fields:
 * - accessControl
 * - bookingPageColorCode
 * - businessTimeZone
 * - customerConsentMessage
 * - enforceOneTimePassword
 * - isBusinessLogoDisplayEnabled
 * - isCustomerConsentEnabled
 * - isSearchEngineIndexabilityDisabled
 * - isTimeSlotTimeZoneSetToBusinessTimeZone
 * - privacyPolicyWebUrl
 * - termsAndConditionsWebUrl
 */
class BookingPageSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingPageSettings
     */
    public const FIELD_ACCESS_CONTROL = 'accessControl';
    public const FIELD_BOOKING_PAGE_COLOR_CODE = 'bookingPageColorCode';
    public const FIELD_BUSINESS_TIME_ZONE = 'businessTimeZone';
    public const FIELD_CUSTOMER_CONSENT_MESSAGE = 'customerConsentMessage';
    public const FIELD_ENFORCE_ONE_TIME_PASSWORD = 'enforceOneTimePassword';
    public const FIELD_IS_BUSINESS_LOGO_DISPLAY_ENABLED = 'isBusinessLogoDisplayEnabled';
    public const FIELD_IS_CUSTOMER_CONSENT_ENABLED = 'isCustomerConsentEnabled';
    public const FIELD_IS_SEARCH_ENGINE_INDEXABILITY_DISABLED = 'isSearchEngineIndexabilityDisabled';
    public const FIELD_IS_TIME_SLOT_TIME_ZONE_SET_TO_BUSINESS_TIME_ZONE = 'isTimeSlotTimeZoneSetToBusinessTimeZone';
    public const FIELD_PRIVACY_POLICY_WEB_URL = 'privacyPolicyWebUrl';
    public const FIELD_TERMS_AND_CONDITIONS_WEB_URL = 'termsAndConditionsWebUrl';

    /**
     * Select specific BookingPageSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
