<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminMicrosoft365Apps
 */
class AdminMicrosoft365Apps
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A container for tenant-level settings for Microsoft 365 applications.
     * @var M365AppsInstallationOptions|\stdClass|null
     */
    public M365AppsInstallationOptions|\stdClass|null $installationOptions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['installationOptions'])) {
            $this->installationOptions = is_array($data['installationOptions']) ? new M365AppsInstallationOptions($data['installationOptions']) : $data['installationOptions'];
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
