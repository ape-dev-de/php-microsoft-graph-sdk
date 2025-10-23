<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceAccount
 */
class WindowsDeviceAccount
{
    /** Not yet documented */
    public ?string $password = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
    }
}
