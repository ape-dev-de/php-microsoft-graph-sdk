<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextContent
 */
class TextContent
{
    /** The text content data. Inherits properties from contentBase. */
    public ?string $data = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['data'])) {
            $this->data = $data['data'];
        }
    }
}
