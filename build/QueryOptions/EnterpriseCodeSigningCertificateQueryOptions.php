<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnterpriseCodeSigningCertificate resources
 *
 * Available select fields:
 */
class EnterpriseCodeSigningCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnterpriseCodeSigningCertificate
     */

    /**
     * Select specific EnterpriseCodeSigningCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
