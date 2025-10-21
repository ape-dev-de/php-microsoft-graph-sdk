<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySslCertificate resources
 *
 * Available select fields:
 */
class SecuritySslCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySslCertificate
     */

    /**
     * Select specific SecuritySslCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
