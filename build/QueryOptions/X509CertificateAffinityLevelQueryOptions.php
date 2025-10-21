<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateAffinityLevel resources
 *
 * Available select fields:
 */
class X509CertificateAffinityLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateAffinityLevel
     */

    /**
     * Select specific X509CertificateAffinityLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
