<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenterDetails
 */
class VirtualEventPresenterDetails
{
    public function __construct(
        /** Bio of the presenter. */
        public ?string $bio = null,
        /** The presenter's company name. */
        public ?string $company = null,
        /** The presenter's job title. */
        public ?string $jobTitle = null,
        /** The presenter's LinkedIn profile URL. */
        public ?string $linkedInProfileWebUrl = null,
        /** The presenter's personal website URL. */
        public ?string $personalSiteWebUrl = null,
        /** The content stream of the presenter's photo. */
        public ?string $photo = null,
        /** The presenter's Twitter profile URL. */
        public ?string $twitterProfileWebUrl = null
    ) {}
}
