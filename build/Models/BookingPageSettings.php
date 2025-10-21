<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingPageSettings
 */
class BookingPageSettings
{
    public function __construct(
        /**  */
        public ?string $accessControl = null,
        /** Custom color for the booking page. The value should be in Hex format. For example, #123456. */
        public ?string $bookingPageColorCode = null,
        /** The time zone of the customer. For a list of possible values, see dateTimeTimeZone. */
        public ?string $businessTimeZone = null,
        /** The personal data collection and usage consent message in the booking page. */
        public ?string $customerConsentMessage = null,
        /** Determines whether the one-time password is required to create an appointment. The default value is false. */
        public ?bool $enforceOneTimePassword = null,
        /** Indicates whether the business logo is displayed on the booking page. The default value is false. */
        public ?bool $isBusinessLogoDisplayEnabled = null,
        /** Enables personal data collection and the usage consent toggle on the booking page. The default value is false. */
        public ?bool $isCustomerConsentEnabled = null,
        /** Indicates whether web crawlers index this page. The defaults value is false. */
        public ?bool $isSearchEngineIndexabilityDisabled = null,
        /** Indicates whether the time zone of the time slot is set to the time zone of the business. The default value is false. */
        public ?bool $isTimeSlotTimeZoneSetToBusinessTimeZone = null,
        /** URL of a webpage that provides the terms and conditions of the business. If a privacy policy isn't included, the following text appears on the booking page as default: 'The policies and practices of {bookingbusinessname} apply to the use of your data.' */
        public ?string $privacyPolicyWebUrl = null,
        /** URL of a webpage that provides the terms and conditions of the business. */
        public ?string $termsAndConditionsWebUrl = null
    ) {}
}
