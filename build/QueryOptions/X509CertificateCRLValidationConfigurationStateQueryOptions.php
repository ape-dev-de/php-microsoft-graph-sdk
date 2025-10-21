<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateCRLValidationConfigurationState resources
 *
 * Available select fields:
 */
class X509CertificateCRLValidationConfigurationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateCRLValidationConfigurationState
     */

    /**
     * Select specific X509CertificateCRLValidationConfigurationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
