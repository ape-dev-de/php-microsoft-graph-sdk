<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingPageSettings
 */
class BookingPageSettings
{
    /**
     */
    private ?string $accessControl;

    /**
     * Custom color for the booking page. The value should be in Hex format. For example, #123456.
     */
    private ?string $bookingPageColorCode;

    /**
     * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     */
    private ?string $businessTimeZone;

    /**
     * The personal data collection and usage consent message in the booking page.
     */
    private ?string $customerConsentMessage;

    /**
     * Determines whether the one-time password is required to create an appointment. The default value is false.
     */
    private ?bool $enforceOneTimePassword;

    /**
     * Indicates whether the business logo is displayed on the booking page. The default value is false.
     */
    private ?bool $isBusinessLogoDisplayEnabled;

    /**
     * Enables personal data collection and the usage consent toggle on the booking page. The default value is false.
     */
    private ?bool $isCustomerConsentEnabled;

    /**
     * Indicates whether web crawlers index this page. The defaults value is false.
     */
    private ?bool $isSearchEngineIndexabilityDisabled;

    /**
     * Indicates whether the time zone of the time slot is set to the time zone of the business. The default value is false.
     */
    private ?bool $isTimeSlotTimeZoneSetToBusinessTimeZone;

    /**
     * URL of a webpage that provides the terms and conditions of the business. If a privacy policy isn''t included, the following text appears on the booking page as default: ''The policies and practices of {bookingbusinessname} apply to the use of your data.
     */
    private ?string $privacyPolicyWebUrl;

    /**
     * URL of a webpage that provides the terms and conditions of the business.
     */
    private ?string $termsAndConditionsWebUrl;


    public function getAccessControl(): ?string
    {
        return $this->accessControl;
    }

    public function setAccessControl(?string $accessControl): self
    {
        $this->accessControl = $accessControl;
        return $this;
    }

    public function getBookingPageColorCode(): ?string
    {
        return $this->bookingPageColorCode;
    }

    public function setBookingPageColorCode(?string $bookingPageColorCode): self
    {
        $this->bookingPageColorCode = $bookingPageColorCode;
        return $this;
    }

    public function getBusinessTimeZone(): ?string
    {
        return $this->businessTimeZone;
    }

    public function setBusinessTimeZone(?string $businessTimeZone): self
    {
        $this->businessTimeZone = $businessTimeZone;
        return $this;
    }

    public function getCustomerConsentMessage(): ?string
    {
        return $this->customerConsentMessage;
    }

    public function setCustomerConsentMessage(?string $customerConsentMessage): self
    {
        $this->customerConsentMessage = $customerConsentMessage;
        return $this;
    }

    public function getEnforceOneTimePassword(): ?bool
    {
        return $this->enforceOneTimePassword;
    }

    public function setEnforceOneTimePassword(?bool $enforceOneTimePassword): self
    {
        $this->enforceOneTimePassword = $enforceOneTimePassword;
        return $this;
    }

    public function getIsBusinessLogoDisplayEnabled(): ?bool
    {
        return $this->isBusinessLogoDisplayEnabled;
    }

    public function setIsBusinessLogoDisplayEnabled(?bool $isBusinessLogoDisplayEnabled): self
    {
        $this->isBusinessLogoDisplayEnabled = $isBusinessLogoDisplayEnabled;
        return $this;
    }

    public function getIsCustomerConsentEnabled(): ?bool
    {
        return $this->isCustomerConsentEnabled;
    }

    public function setIsCustomerConsentEnabled(?bool $isCustomerConsentEnabled): self
    {
        $this->isCustomerConsentEnabled = $isCustomerConsentEnabled;
        return $this;
    }

    public function getIsSearchEngineIndexabilityDisabled(): ?bool
    {
        return $this->isSearchEngineIndexabilityDisabled;
    }

    public function setIsSearchEngineIndexabilityDisabled(?bool $isSearchEngineIndexabilityDisabled): self
    {
        $this->isSearchEngineIndexabilityDisabled = $isSearchEngineIndexabilityDisabled;
        return $this;
    }

    public function getIsTimeSlotTimeZoneSetToBusinessTimeZone(): ?bool
    {
        return $this->isTimeSlotTimeZoneSetToBusinessTimeZone;
    }

    public function setIsTimeSlotTimeZoneSetToBusinessTimeZone(?bool $isTimeSlotTimeZoneSetToBusinessTimeZone): self
    {
        $this->isTimeSlotTimeZoneSetToBusinessTimeZone = $isTimeSlotTimeZoneSetToBusinessTimeZone;
        return $this;
    }

    public function getPrivacyPolicyWebUrl(): ?string
    {
        return $this->privacyPolicyWebUrl;
    }

    public function setPrivacyPolicyWebUrl(?string $privacyPolicyWebUrl): self
    {
        $this->privacyPolicyWebUrl = $privacyPolicyWebUrl;
        return $this;
    }

    public function getTermsAndConditionsWebUrl(): ?string
    {
        return $this->termsAndConditionsWebUrl;
    }

    public function setTermsAndConditionsWebUrl(?string $termsAndConditionsWebUrl): self
    {
        $this->termsAndConditionsWebUrl = $termsAndConditionsWebUrl;
        return $this;
    }

}
