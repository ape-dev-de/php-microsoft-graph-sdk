<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthorityDetail resources
 *
 * Available select fields:
 */
class CertificateAuthorityDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CertificateAuthorityDetail
     */

    /**
     * Select specific CertificateAuthorityDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
