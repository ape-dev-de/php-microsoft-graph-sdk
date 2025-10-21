<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthorityType resources
 *
 * Available select fields:
 */
class CertificateAuthorityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CertificateAuthorityType
     */

    /**
     * Select specific CertificateAuthorityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
