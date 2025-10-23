<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminMicrosoft365Apps
 */
class AdminMicrosoft365Apps
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A container for tenant-level settings for Microsoft 365 applications.
     * @var M365AppsInstallationOptions|\stdClass|null
     */
    public mixed $installationOptions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['installationOptions'])) {
            $this->installationOptions = $data['installationOptions'];
        }
    }
}
