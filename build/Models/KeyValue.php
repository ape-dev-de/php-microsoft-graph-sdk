<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyValue
 */
class KeyValue
{
    /** Key for the key-value pair. */
    public ?string $key = null;

    /** Value for the key-value pair. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
