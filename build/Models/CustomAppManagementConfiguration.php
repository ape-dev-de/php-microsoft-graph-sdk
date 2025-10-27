<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomAppManagementConfiguration
 */
class CustomAppManagementConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Collection of keyCredential restrictions settings to be applied to an application or service principal.
     * @var KeyCredentialConfiguration[]
     */
    public array $keyCredentials = [];

    /** 
     * Collection of password restrictions settings to be applied to an application or service principal.
     * @var PasswordCredentialConfiguration[]
     */
    public array $passwordCredentials = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['keyCredentials'])) {
            $this->keyCredentials = $data['keyCredentials'];
        }
        if (isset($data['passwordCredentials'])) {
            $this->passwordCredentials = $data['passwordCredentials'];
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
