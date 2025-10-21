<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAuthenticationMode resources
 *
 * Available select fields:
 */
class X509CertificateAuthenticationModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateAuthenticationMode
     */

    /**
     * Select specific X509CertificateAuthenticationMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
