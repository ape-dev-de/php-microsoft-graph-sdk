<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSecretKeyStringValuePair
 */
class SynchronizationSecretKeyStringValuePair
{
    /**  */
    public ?SynchronizationSecret $key = null;

    /** The value of the secret. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = is_array($data['key']) ? new SynchronizationSecret($data['key']) : $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
