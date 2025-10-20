<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostSslCertificatePortCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostSslCertificatePortCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostSslCertificatePortCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostSslCertificatePortCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
