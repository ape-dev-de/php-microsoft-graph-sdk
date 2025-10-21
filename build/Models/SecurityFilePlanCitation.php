<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanCitation
 */
class SecurityFilePlanCitation
{
    public function __construct(
        /** Represents the jurisdiction or agency that published the filePlanCitation. */
        public ?string $citationJurisdiction = null,
        /** Represents the URL to the published filePlanCitation. */
        public ?string $citationUrl = null
    ) {}
}
