<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostSslCertificate resources
 *
 * Available select fields:
 */
class SecurityHostSslCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostSslCertificate
     */

    /**
     * Select specific SecurityHostSslCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
