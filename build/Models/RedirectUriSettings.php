<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RedirectUriSettings
 */
class RedirectUriSettings
{
    /**  */
    public ?float $index = null;

    /**  */
    public ?string $uri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['index'])) {
            $this->index = $data['index'];
        }
        if (isset($data['uri'])) {
            $this->uri = $data['uri'];
        }
    }
}
