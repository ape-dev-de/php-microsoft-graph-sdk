<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Diagnostic
 */
class Diagnostic
{
    /**  */
    public ?string $message = null;

    /**  */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
