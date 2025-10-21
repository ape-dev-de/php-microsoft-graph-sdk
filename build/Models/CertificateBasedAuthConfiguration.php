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
     * @var string[]
     */
    private array $certificateAuthorities = [];


    /**
     * @return string[]
     */
    public function getCertificateAuthorities(): array
    {
        return $this->certificateAuthorities;
    }

    /**
     * @param string[] $certificateAuthorities
     */
    public function setCertificateAuthorities(array $certificateAuthorities): self
    {
        $this->certificateAuthorities = $certificateAuthorities;
        return $this;
    }

}
