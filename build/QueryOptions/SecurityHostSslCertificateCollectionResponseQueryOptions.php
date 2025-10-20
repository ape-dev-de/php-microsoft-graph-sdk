<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostSslCertificateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostSslCertificateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostSslCertificateCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostSslCertificateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
