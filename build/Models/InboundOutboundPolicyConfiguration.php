<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InboundOutboundPolicyConfiguration
 */
class InboundOutboundPolicyConfiguration
{
    public function __construct(
        /** Defines whether external users coming inbound are allowed. */
        public ?bool $inboundAllowed = null,
        /** Defines whether internal users are allowed to go outbound. */
        public ?bool $outboundAllowed = null
    ) {}
}
