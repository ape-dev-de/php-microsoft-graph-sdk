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
            $this->final = $data['final'];
        }
        if (isset($data['original'])) {
            $this->original = $data['original'];
        }
        if (isset($data['routingType'])) {
            $this->routingType = $data['routingType'];
        }
    }
}
