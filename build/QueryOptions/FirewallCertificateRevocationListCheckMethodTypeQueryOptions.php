<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FirewallCertificateRevocationListCheckMethodType resources
 *
 * Available select fields:
 */
class FirewallCertificateRevocationListCheckMethodTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FirewallCertificateRevocationListCheckMethodType
     */

    /**
     * Select specific FirewallCertificateRevocationListCheckMethodType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
