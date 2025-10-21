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
     * @var string[]
     */
    private array $certificateBasedAuthConfigurations = [];


    /**
     * @return string[]
     */
    public function getCertificateBasedAuthConfigurations(): array
    {
        return $this->certificateBasedAuthConfigurations;
    }

    /**
     * @param string[] $certificateBasedAuthConfigurations
     */
    public function setCertificateBasedAuthConfigurations(array $certificateBasedAuthConfigurations): self
    {
        $this->certificateBasedAuthConfigurations = $certificateBasedAuthConfigurations;
        return $this;
    }

}
