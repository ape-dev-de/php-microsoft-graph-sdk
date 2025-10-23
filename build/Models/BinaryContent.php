<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BinaryContent
 */
class BinaryContent
{
    /** The binary content, encoded as a Base64 string. Inherited from contentBase. */
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
