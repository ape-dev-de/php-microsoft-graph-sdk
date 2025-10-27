<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordResetResponse
 */
class PasswordResetResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The Microsoft Entra ID-generated password. */
    public ?string $newPassword = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['newPassword'])) {
            $this->newPassword = $data['newPassword'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
