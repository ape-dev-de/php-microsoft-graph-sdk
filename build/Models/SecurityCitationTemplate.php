<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCitationTemplate
 */
class SecurityCitationTemplate
{
    public function __construct(
        /** Represents the jurisdiction or agency that published the citation. */
        public ?string $citationJurisdiction = null,
        /** Represents the URL to the published citation. */
        public ?string $citationUrl = null
    ) {}
}
