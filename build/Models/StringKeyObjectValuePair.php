<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyObjectValuePair
 */
class StringKeyObjectValuePair
{
    /** Key. */
    public ?string $key = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
    }
}
