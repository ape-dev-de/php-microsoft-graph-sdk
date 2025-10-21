<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10NetworkProxyServer
 */
class Windows10NetworkProxyServer
{
    public function __construct(
        /** Address to the proxy server. Specify an address in the format [':'] */
        public ?string $address = null,
        /** @var string[] Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node. */
        public array $exceptions = [],
        /** Specifies whether the proxy server should be used for local (intranet) addresses. */
        public ?bool $useForLocalAddresses = null
    ) {}
}
