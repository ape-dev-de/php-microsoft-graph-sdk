<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectionInfo
 */
class ConnectionInfo
{
    /** The endpoint that is used by Entitlement Management to communicate with the access package resource. */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
