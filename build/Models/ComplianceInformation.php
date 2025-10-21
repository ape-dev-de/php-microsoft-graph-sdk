<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceInformation
 */
class ComplianceInformation
{
    public function __construct(
        /** Collection of the certification controls associated with the certification. */
        public array $certificationControls = [],
        /** The name of the compliance certification, for example, ISO 27018:2014, GDPR, FedRAMP, and NIST 800-171. */
        public ?string $certificationName = null
    ) {}
}
