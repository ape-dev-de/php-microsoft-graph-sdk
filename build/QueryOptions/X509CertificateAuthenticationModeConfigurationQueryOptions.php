<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAuthenticationModeConfiguration resources
 *
 * Available select fields:
 * - rules
 * - x509CertificateAuthenticationDefaultMode
 * - x509CertificateDefaultRequiredAffinityLevel
 */
class X509CertificateAuthenticationModeConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_RULES = 'rules';
    public const FIELD_X509CERTIFICATE_AUTHENTICATION_DEFAULT_MODE = 'x509CertificateAuthenticationDefaultMode';
    public const FIELD_X509CERTIFICATE_DEFAULT_REQUIRED_AFFINITY_LEVEL = 'x509CertificateDefaultRequiredAffinityLevel';

    /**
     * Select specific X509CertificateAuthenticationModeConfiguration properties
     * 
     * @param array<string> $select Use X509CertificateAuthenticationModeConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
