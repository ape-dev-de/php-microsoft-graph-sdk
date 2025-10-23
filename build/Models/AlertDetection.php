<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertDetection
 */
class AlertDetection
{
    /**  */
    public ?string $detectionType = null;

    /**  */
    public ?string $method = null;

    /**  */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['detectionType'])) {
            $this->detectionType = $data['detectionType'];
        }
        if (isset($data['method'])) {
            $this->method = $data['method'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
