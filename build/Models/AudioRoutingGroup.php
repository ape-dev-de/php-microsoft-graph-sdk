<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioRoutingGroup
 */
class AudioRoutingGroup
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * List of receiving participant ids.
     * @var string[]
     */
    public array $receivers = [];

    /**  */
    public ?RoutingMode $routingMode = null;

    /** 
     * List of source participant ids.
     * @var string[]
     */
    public array $sources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['receivers'])) {
            $this->receivers = $data['receivers'];
        }
        if (isset($data['routingMode'])) {
            $this->routingMode = is_array($data['routingMode']) ? new RoutingMode($data['routingMode']) : $data['routingMode'];
        }
        if (isset($data['sources'])) {
            $this->sources = $data['sources'];
        }
    }
}
