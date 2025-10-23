<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementData
 */
class DeviceAndAppManagementData
{
    /** Not yet documented */
    public ?string $content = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
    }
}
