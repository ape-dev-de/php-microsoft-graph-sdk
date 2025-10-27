<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InboundOutboundPolicyConfiguration
 */
class InboundOutboundPolicyConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Defines whether external users coming inbound are allowed. */
    public ?bool $inboundAllowed = null;

    /** Defines whether internal users are allowed to go outbound. */
    public ?bool $outboundAllowed = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['inboundAllowed'])) {
            $this->inboundAllowed = $data['inboundAllowed'];
        }
        if (isset($data['outboundAllowed'])) {
            $this->outboundAllowed = $data['outboundAllowed'];
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
