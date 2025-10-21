<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicKeyInfrastructureRoot
 */
class PublicKeyInfrastructureRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] The collection of public key infrastructure instances for the certificate-based authentication feature for users. */
        public array $certificateBasedAuthConfigurations = []
    ) {}
}
