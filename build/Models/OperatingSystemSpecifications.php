<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperatingSystemSpecifications
 */
class OperatingSystemSpecifications
{
    /** The platform of the operating system (for example, 'Windows'). */
    public ?string $operatingSystemPlatform = null;

    /** The version string of the operating system. */
    public ?string $operatingSystemVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['operatingSystemPlatform'])) {
            $this->operatingSystemPlatform = $data['operatingSystemPlatform'];
        }
        if (isset($data['operatingSystemVersion'])) {
            $this->operatingSystemVersion = $data['operatingSystemVersion'];
        }
    }
}
