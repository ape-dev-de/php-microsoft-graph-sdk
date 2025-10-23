<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceAzureADAccount
 */
class WindowsDeviceAzureADAccount
{
    /** Not yet documented */
    public ?string $password = null;

    /** Not yet documented */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
