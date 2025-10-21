<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParentalControlSettings
 */
class ParentalControlSettings
{
    public function __construct(
        /** @var string[] Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list. */
        public array $countriesBlockedForMinors = [],
        /** Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country/region minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country/region minor rules.BlockMinorsBlocks minors from using the app. */
        public ?string $legalAgeGroupRule = null
    ) {}
}
