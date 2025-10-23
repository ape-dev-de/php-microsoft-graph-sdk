<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MetaDataKeyValuePair
 */
class MetaDataKeyValuePair
{
    /** Key of the metadata. */
    public ?string $key = null;

    /** Value of the metadata. Should be an object. */
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
