<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthConfiguration
 */
class CertificateBasedAuthConfiguration
{
    public function __construct(
        /** @var string[] Collection of certificate authorities which creates a trusted certificate chain. */
        public array $certificateAuthorities = []
    ) {}
}
