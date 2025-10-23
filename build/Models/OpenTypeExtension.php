<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenTypeExtension
 */
class OpenTypeExtension
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A unique text identifier for an open type data extension. Optional. */
    public ?string $extensionName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['extensionName'])) {
            $this->extensionName = $data['extensionName'];
        }
    }
}
