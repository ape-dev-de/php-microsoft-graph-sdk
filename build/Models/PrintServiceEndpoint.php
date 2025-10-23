<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintServiceEndpoint
 */
class PrintServiceEndpoint
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A human-readable display name for the endpoint. */
    public ?string $displayName = null;

    /** The URI that can be used to access the service. */
    public ?string $uri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['uri'])) {
            $this->uri = $data['uri'];
        }
    }
}
