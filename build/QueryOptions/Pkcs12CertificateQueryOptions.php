<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Pkcs12Certificate resources
 *
 * Available select fields:
 * - password
 * - pkcs12Value
 */
class Pkcs12CertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Pkcs12Certificate
     */
    public const FIELD_PASSWORD = 'password';
    public const FIELD_PKCS12VALUE = 'pkcs12Value';

    /**
     * Select specific Pkcs12Certificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
