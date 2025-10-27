<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingPageSettings
 */
class BookingPageSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?BookingPageAccessControl $accessControl = null;

    /** Custom color for the booking page. The value should be in Hex format. For example, #123456. */
    public ?string $bookingPageColorCode = null;

    /** The time zone of the customer. For a list of possible values, see dateTimeTimeZone. */
    public ?string $businessTimeZone = null;

    /** The personal data collection and usage consent message in the booking page. */
    public ?string $customerConsentMessage = null;

    /** Determines whether the one-time password is required to create an appointment. The default value is false. */
    public ?bool $enforceOneTimePassword = null;

    /** Indicates whether the business logo is displayed on the booking page. The default value is false. */
    public ?bool $isBusinessLogoDisplayEnabled = null;

    /** Enables personal data collection and the usage consent toggle on the booking page. The default value is false. */
    public ?bool $isCustomerConsentEnabled = null;

    /** Indicates whether web crawlers index this page. The defaults value is false. */
    public ?bool $isSearchEngineIndexabilityDisabled = null;

    /** Indicates whether the time zone of the time slot is set to the time zone of the business. The default value is false. */
    public ?bool $isTimeSlotTimeZoneSetToBusinessTimeZone = null;

    /** URL of a webpage that provides the terms and conditions of the business. If a privacy policy isn't included, the following text appears on the booking page as default: 'The policies and practices of {bookingbusinessname} apply to the use of your data.' */
    public ?string $privacyPolicyWebUrl = null;

    /** URL of a webpage that provides the terms and conditions of the business. */
    public ?string $termsAndConditionsWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessControl'])) {
            $this->accessControl = is_string($data['accessControl']) ? BookingPageAccessControl::tryFrom($data['accessControl']) : $data['accessControl'];
        }
        if (isset($data['bookingPageColorCode'])) {
            $this->bookingPageColorCode = $data['bookingPageColorCode'];
        }
        if (isset($data['businessTimeZone'])) {
            $this->businessTimeZone = $data['businessTimeZone'];
        }
        if (isset($data['customerConsentMessage'])) {
            $this->customerConsentMessage = $data['customerConsentMessage'];
        }
        if (isset($data['enforceOneTimePassword'])) {
            $this->enforceOneTimePassword = is_bool($data['enforceOneTimePassword']) ? $data['enforceOneTimePassword'] : (bool)$data['enforceOneTimePassword'];
        }
        if (isset($data['isBusinessLogoDisplayEnabled'])) {
            $this->isBusinessLogoDisplayEnabled = is_bool($data['isBusinessLogoDisplayEnabled']) ? $data['isBusinessLogoDisplayEnabled'] : (bool)$data['isBusinessLogoDisplayEnabled'];
        }
        if (isset($data['isCustomerConsentEnabled'])) {
            $this->isCustomerConsentEnabled = is_bool($data['isCustomerConsentEnabled']) ? $data['isCustomerConsentEnabled'] : (bool)$data['isCustomerConsentEnabled'];
        }
        if (isset($data['isSearchEngineIndexabilityDisabled'])) {
            $this->isSearchEngineIndexabilityDisabled = is_bool($data['isSearchEngineIndexabilityDisabled']) ? $data['isSearchEngineIndexabilityDisabled'] : (bool)$data['isSearchEngineIndexabilityDisabled'];
        }
        if (isset($data['isTimeSlotTimeZoneSetToBusinessTimeZone'])) {
            $this->isTimeSlotTimeZoneSetToBusinessTimeZone = is_bool($data['isTimeSlotTimeZoneSetToBusinessTimeZone']) ? $data['isTimeSlotTimeZoneSetToBusinessTimeZone'] : (bool)$data['isTimeSlotTimeZoneSetToBusinessTimeZone'];
        }
        if (isset($data['privacyPolicyWebUrl'])) {
            $this->privacyPolicyWebUrl = $data['privacyPolicyWebUrl'];
        }
        if (isset($data['termsAndConditionsWebUrl'])) {
            $this->termsAndConditionsWebUrl = $data['termsAndConditionsWebUrl'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
