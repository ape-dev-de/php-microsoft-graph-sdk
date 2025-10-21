<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsTraceRouteHop
 */
class CallRecordsTraceRouteHop
{
    /**
     * The network path count of this hop that was used to compute the RTT.
     */
    private ?float $hopCount;

    /**
     * IP address used for this hop in the network trace.
     */
    private ?string $ipAddress;

    /**
     * The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in ISO 8601 format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
     */
    private ?string $roundTripTime;


    public function getHopCount(): ?float
    {
        return $this->hopCount;
    }

    public function setHopCount(?float $hopCount): self
    {
        $this->hopCount = $hopCount;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getRoundTripTime(): ?string
    {
        return $this->roundTripTime;
    }

    public function setRoundTripTime(?string $roundTripTime): self
    {
        $this->roundTripTime = $roundTripTime;
        return $this;
    }

}
