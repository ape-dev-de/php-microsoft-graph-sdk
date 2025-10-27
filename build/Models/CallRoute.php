<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRoute
 */
class CallRoute
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?IdentitySet $final = null;

    /**  */
    public ?IdentitySet $original = null;

    /**  */
    public ?RoutingType $routingType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['final'])) {
            $this->final = is_array($data['final']) ? new IdentitySet($data['final']) : $data['final'];
        }
        if (isset($data['original'])) {
            $this->original = is_array($data['original']) ? new IdentitySet($data['original']) : $data['original'];
        }
        if (isset($data['routingType'])) {
            $this->routingType = is_string($data['routingType']) ? RoutingType::tryFrom($data['routingType']) : $data['routingType'];
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
