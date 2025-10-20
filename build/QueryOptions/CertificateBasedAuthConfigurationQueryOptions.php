<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthConfiguration resources
 *
 * Available select fields:
 * - certificateAuthorities
 */
class CertificateBasedAuthConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE_AUTHORITIES = 'certificateAuthorities';

    /**
     * Select specific CertificateBasedAuthConfiguration properties
     * 
     * @param array<string> $select Use CertificateBasedAuthConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
