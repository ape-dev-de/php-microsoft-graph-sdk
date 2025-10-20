<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class X509CertificateAuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific X509CertificateAuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use X509CertificateAuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
