<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateCombinationConfiguration resources
 *
 * Available select fields:
 * - allowedIssuerSkis
 * - allowedPolicyOIDs
 */
class X509CertificateCombinationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateCombinationConfiguration
     */
    public const FIELD_ALLOWED_ISSUER_SKIS = 'allowedIssuerSkis';
    public const FIELD_ALLOWED_POLICY_OIDS = 'allowedPolicyOIDs';

    /**
     * Select specific X509CertificateCombinationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
