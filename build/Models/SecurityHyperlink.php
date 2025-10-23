<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHyperlink
 */
class SecurityHyperlink
{
    /** The name for this hyperlink. */
    public ?string $name = null;

    /** The URL for this hyperlink. */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
