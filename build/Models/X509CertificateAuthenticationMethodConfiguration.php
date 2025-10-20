<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationMethodConfiguration
 */
class X509CertificateAuthenticationMethodConfiguration
{
    /**
     * Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings.
     */
    private ?string $authenticationModeConfiguration;

    /**
     * Defines fields in the X.509 certificate that map to attributes of the Microsoft Entra user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored.
     */
    private array $certificateUserBindings = [];

    /**
     */
    private ?string $crlValidationConfiguration;

    /**
     * A collection of groups that are enabled to use the authentication method.
     */
    private ?string $includeTargets;

    public function getAuthenticationModeConfiguration(): ?string
    {
        return $this->authenticationModeConfiguration;
    }

    public function setAuthenticationModeConfiguration(?string $authenticationModeConfiguration): self
    {
        $this->authenticationModeConfiguration = $authenticationModeConfiguration;
        return $this;
    }

    public function getCertificateUserBindings(): array
    {
        return $this->certificateUserBindings;
    }

    public function setCertificateUserBindings(array $certificateUserBindings): self
    {
        $this->certificateUserBindings = $certificateUserBindings;
        return $this;
    }

    public function getCrlValidationConfiguration(): ?string
    {
        return $this->crlValidationConfiguration;
    }

    public function setCrlValidationConfiguration(?string $crlValidationConfiguration): self
    {
        $this->crlValidationConfiguration = $crlValidationConfiguration;
        return $this;
    }

    public function getIncludeTargets(): ?string
    {
        return $this->includeTargets;
    }

    public function setIncludeTargets(?string $includeTargets): self
    {
        $this->includeTargets = $includeTargets;
        return $this;
    }

}
