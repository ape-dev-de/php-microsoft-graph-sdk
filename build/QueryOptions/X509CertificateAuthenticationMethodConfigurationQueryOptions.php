<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - authenticationModeConfiguration
 * - certificateUserBindings
 * - crlValidationConfiguration
 * - includeTargets
 */
class X509CertificateAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateAuthenticationMethodConfiguration
     */
    public const FIELD_AUTHENTICATION_MODE_CONFIGURATION = 'authenticationModeConfiguration';
    public const FIELD_CERTIFICATE_USER_BINDINGS = 'certificateUserBindings';
    public const FIELD_CRL_VALIDATION_CONFIGURATION = 'crlValidationConfiguration';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific X509CertificateAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
