<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthPki resources
 *
 * Available select fields:
 */
class CertificateBasedAuthPkiQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CertificateBasedAuthPki
     */

    /**
     * Select specific CertificateBasedAuthPki properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
