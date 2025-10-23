<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourcePermission
 */
class ResourcePermission
{
    /**  */
    public ?string $type = null;

    /**  */
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
