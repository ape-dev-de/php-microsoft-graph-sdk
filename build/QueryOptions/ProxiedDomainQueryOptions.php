<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProxiedDomain resources
 *
 * Available select fields:
 * - ipAddressOrFQDN
 * - proxy
 */
class ProxiedDomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProxiedDomain
     */
    public const FIELD_IP_ADDRESS_OR_FQDN = 'ipAddressOrFQDN';
    public const FIELD_PROXY = 'proxy';

    /**
     * Select specific ProxiedDomain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
