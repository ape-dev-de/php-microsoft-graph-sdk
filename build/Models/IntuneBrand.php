<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntuneBrand
 */
class IntuneBrand
{
    public function __construct(
        /** Email address of the person/organization responsible for IT support. */
        public ?string $contactITEmailAddress = null,
        /** Name of the person/organization responsible for IT support. */
        public ?string $contactITName = null,
        /** Text comments regarding the person/organization responsible for IT support. */
        public ?string $contactITNotes = null,
        /** Phone number of the person/organization responsible for IT support. */
        public ?string $contactITPhoneNumber = null,
        /** Logo image displayed in Company Portal apps which have a dark background behind the logo. */
        public ?string $darkBackgroundLogo = null,
        /** Company/organization name that is displayed to end users. */
        public ?string $displayName = null,
        /** Logo image displayed in Company Portal apps which have a light background behind the logo. */
        public ?string $lightBackgroundLogo = null,
        /** Display name of the company/organization’s IT helpdesk site. */
        public ?string $onlineSupportSiteName = null,
        /** URL to the company/organization’s IT helpdesk site. */
        public ?string $onlineSupportSiteUrl = null,
        /** URL to the company/organization’s privacy policy. */
        public ?string $privacyUrl = null,
        /** Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
        public ?bool $showDisplayNameNextToLogo = null,
        /** Boolean that represents whether the administrator-supplied logo images are shown or not shown. */
        public ?bool $showLogo = null,
        /** Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
        public ?bool $showNameNextToLogo = null,
        /** Primary theme color used in the Company Portal applications and web portal. */
        public ?string $themeColor = null
    ) {}
}
