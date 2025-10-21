<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateRuleType resources
 *
 * Available select fields:
 */
class X509CertificateRuleTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateRuleType
     */

    /**
     * Select specific X509CertificateRuleType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
