<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultTemplate
 */
class ResultTemplate
{
    /** JSON schema of the result template. */
    public ?string $body = null;

    /** Name of the result template. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
