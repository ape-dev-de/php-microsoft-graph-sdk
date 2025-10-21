<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCombinationConfiguration
 */
class X509CertificateCombinationConfiguration
{
    public function __construct(
        /** @var string[] A list of allowed subject key identifier values. */
        public array $allowedIssuerSkis = [],
        /** @var string[] A list of allowed policy OIDs. */
        public array $allowedPolicyOIDs = []
    ) {}
}
