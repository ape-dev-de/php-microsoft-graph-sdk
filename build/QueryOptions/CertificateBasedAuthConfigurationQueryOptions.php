<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthConfiguration resources
 *
 * Available select fields:
 */
class CertificateBasedAuthConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CertificateBasedAuthConfiguration
     */

    /**
     * Select specific CertificateBasedAuthConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
