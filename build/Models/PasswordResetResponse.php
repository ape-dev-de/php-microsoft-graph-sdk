<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordResetResponse
 */
class PasswordResetResponse
{
    /** The Microsoft Entra ID-generated password. */
    public ?string $newPassword = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['newPassword'])) {
            $this->newPassword = $data['newPassword'];
        }
    }
}
