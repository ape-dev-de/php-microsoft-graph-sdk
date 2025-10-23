<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRoute
 */
class CallRoute
{
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
        if (isset($data['final'])) {
            $this->final = is_array($data['final']) ? new IdentitySet($data['final']) : $data['final'];
        }
        if (isset($data['original'])) {
            $this->original = is_array($data['original']) ? new IdentitySet($data['original']) : $data['original'];
        }
        if (isset($data['routingType'])) {
            $this->routingType = is_array($data['routingType']) ? new RoutingType($data['routingType']) : $data['routingType'];
        }
    }
}
