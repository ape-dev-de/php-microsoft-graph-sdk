<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10NetworkProxyServer resources
 *
 * Available select fields:
 * - address
 * - exceptions
 * - useForLocalAddresses
 */
class Windows10NetworkProxyServerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10NetworkProxyServer
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_EXCEPTIONS = 'exceptions';
    public const FIELD_USE_FOR_LOCAL_ADDRESSES = 'useForLocalAddresses';

    /**
     * Select specific Windows10NetworkProxyServer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
