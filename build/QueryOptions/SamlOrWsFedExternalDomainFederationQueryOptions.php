<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlOrWsFedExternalDomainFederation resources
 *
 * Available select fields:
 * - domains
 */
class SamlOrWsFedExternalDomainFederationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SamlOrWsFedExternalDomainFederation
     */
    public const FIELD_DOMAINS = 'domains';

    /**
     * Select specific SamlOrWsFedExternalDomainFederation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
