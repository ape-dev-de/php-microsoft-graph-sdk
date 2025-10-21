<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class X509CertificateAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateAuthenticationMethodConfiguration
     */

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
