<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalLink
 */
class ExternalLink
{
    /** The URL of the link. */
    public ?string $href = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['href'])) {
            $this->href = $data['href'];
        }
    }
}
