<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CertificateBasedAuthConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CertificateBasedAuthConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use CertificateBasedAuthConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
