<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InboundOutboundPolicyConfiguration
 */
class InboundOutboundPolicyConfiguration
{
    /**
     * Defines whether external users coming inbound are allowed.
     */
    private ?bool $inboundAllowed;

    /**
     * Defines whether internal users are allowed to go outbound.
     */
    private ?string $outboundAllowed;

    public function getInboundAllowed(): ?bool
    {
        return $this->inboundAllowed;
    }

    public function setInboundAllowed(?bool $inboundAllowed): self
    {
        $this->inboundAllowed = $inboundAllowed;
        return $this;
    }

    public function getOutboundAllowed(): ?string
    {
        return $this->outboundAllowed;
    }

    public function setOutboundAllowed(?string $outboundAllowed): self
    {
        $this->outboundAllowed = $outboundAllowed;
        return $this;
    }

}
