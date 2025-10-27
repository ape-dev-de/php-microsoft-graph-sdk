<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsTraceRouteHop
 */
class CallRecordsTraceRouteHop
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The network path count of this hop that was used to compute the RTT. */
    public ?float $hopCount = null;

    /** IP address used for this hop in the network trace. */
    public ?string $ipAddress = null;

    /** The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in ISO 8601 format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator. */
    public ?string $roundTripTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['hopCount'])) {
            $this->hopCount = $data['hopCount'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['roundTripTime'])) {
            $this->roundTripTime = $data['roundTripTime'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
