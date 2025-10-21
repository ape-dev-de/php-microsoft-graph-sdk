<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsSrvRecord
 */
class DomainDnsSrvRecord
{
    public function __construct(
        /** Value to use when configuring the Target property of the SRV record at the DNS host. */
        public ?string $nameTarget = null,
        /** Value to use when configuring the port property of the SRV record at the DNS host. */
        public ?float $port = null,
        /** Value to use when configuring the priority property of the SRV record at the DNS host. */
        public ?float $priority = null,
        /** Value to use when configuring the protocol property of the SRV record at the DNS host. */
        public ?string $protocol = null,
        /** Value to use when configuring the service property of the SRV record at the DNS host. */
        public ?string $service = null,
        /** Value to use when configuring the weight property of the SRV record at the DNS host. */
        public ?string $weight = null
    ) {}
}
