<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthConfiguration
 */
class CertificateBasedAuthConfiguration
{
    /**
     * Collection of certificate authorities which creates a trusted certificate chain.
     */
    private ?string $certificateAuthorities;

    public function getCertificateAuthorities(): ?string
    {
        return $this->certificateAuthorities;
    }

    public function setCertificateAuthorities(?string $certificateAuthorities): self
    {
        $this->certificateAuthorities = $certificateAuthorities;
        return $this;
    }

}
