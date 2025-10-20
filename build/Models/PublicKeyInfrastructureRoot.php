<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicKeyInfrastructureRoot
 */
class PublicKeyInfrastructureRoot
{
    /**
     * The collection of public key infrastructure instances for the certificate-based authentication feature for users.
     */
    private ?string $certificateBasedAuthConfigurations;

    public function getCertificateBasedAuthConfigurations(): ?string
    {
        return $this->certificateBasedAuthConfigurations;
    }

    public function setCertificateBasedAuthConfigurations(?string $certificateBasedAuthConfigurations): self
    {
        $this->certificateBasedAuthConfigurations = $certificateBasedAuthConfigurations;
        return $this;
    }

}
