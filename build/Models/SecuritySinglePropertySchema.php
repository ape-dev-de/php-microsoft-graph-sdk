<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySinglePropertySchema
 */
class SecuritySinglePropertySchema
{
    /** The name of the property. */
    public ?string $name = null;

    /** The type of the property. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
