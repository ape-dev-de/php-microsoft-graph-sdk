<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDnsEvidence
 */
class SecurityDnsEvidence
{
    public function __construct(
        /**  */
        public ?string $dnsServerIp = null,
        /**  */
        public ?string $domainName = null,
        /**  */
        public ?string $hostIpAddress = null,
        /** @var string[]  */
        public array $ipAddresses = []
    ) {}
}
