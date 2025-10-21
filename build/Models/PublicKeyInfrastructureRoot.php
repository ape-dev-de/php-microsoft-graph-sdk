<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicKeyInfrastructureRoot
 */
class PublicKeyInfrastructureRoot
{
    public function __construct(
        /** @var string[] The collection of public key infrastructure instances for the certificate-based authentication feature for users. */
        public array $certificateBasedAuthConfigurations = []
    ) {}
}
