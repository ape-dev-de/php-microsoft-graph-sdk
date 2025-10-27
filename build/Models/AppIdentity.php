<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppIdentity
 */
class AppIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Refers to the unique ID representing application in Microsoft Entra ID. */
    public ?string $appId = null;

    /** Refers to the application name displayed in the Microsoft Entra admin center. */
    public ?string $displayName = null;

    /** Refers to the unique ID for the service principal in Microsoft Entra ID. */
    public ?string $servicePrincipalId = null;

    /** Refers to the Service Principal Name is the Application name in the tenant. */
    public ?string $servicePrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['servicePrincipalId'])) {
            $this->servicePrincipalId = $data['servicePrincipalId'];
        }
        if (isset($data['servicePrincipalName'])) {
            $this->servicePrincipalName = $data['servicePrincipalName'];
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
