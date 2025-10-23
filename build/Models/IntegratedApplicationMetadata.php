<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegratedApplicationMetadata
 */
class IntegratedApplicationMetadata
{
    /** The name of the integrated application. */
    public ?string $name = null;

    /** The version number of the integrated application. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
