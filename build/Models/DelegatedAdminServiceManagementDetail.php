<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminServiceManagementDetail
 */
class DelegatedAdminServiceManagementDetail
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The URL of the management portal for the managed service. Read-only. */
    public ?string $serviceManagementUrl = null;

    /** The name of a managed service. Read-only. */
    public ?string $serviceName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['serviceManagementUrl'])) {
            $this->serviceManagementUrl = $data['serviceManagementUrl'];
        }
        if (isset($data['serviceName'])) {
            $this->serviceName = $data['serviceName'];
        }
    }
}
