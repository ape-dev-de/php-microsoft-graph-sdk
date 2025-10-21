<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCvssSummary
 */
class SecurityCvssSummary
{
    public function __construct(
        /** The CVSS score about this vulnerability. */
        public ?string $score = null,
        /** The CVSS severity rating for this vulnerability. The possible values are: none, low, medium, high, critical, unknownFutureValue. */
        public ?SecurityVulnerabilitySeverity $severity = null,
        /** The CVSS vector string for this vulnerability. */
        public ?string $vectorString = null
    ) {}
}
