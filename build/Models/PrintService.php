<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintService
 */
class PrintService
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Endpoints that can be used to access the service. Read-only. Nullable.
     * @var PrintServiceEndpoint[]
     */
    public array $endpoints = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endpoints'])) {
            $this->endpoints = $data['endpoints'];
        }
    }
}
