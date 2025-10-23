<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MimeContent
 */
class MimeContent
{
    /** Indicates the content mime type. */
    public ?string $type = null;

    /** The byte array that contains the actual content. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
