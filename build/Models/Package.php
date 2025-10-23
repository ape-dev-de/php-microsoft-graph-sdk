<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Package
 */
class Package
{
    /** A string indicating the type of package. While oneNote is the only currently defined value, you should expect other package types to be returned and handle them accordingly. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
