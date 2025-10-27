<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppSettings
 */
class TeamsAppSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether users are allowed to request access to the unavailable Teams apps. */
    public ?bool $allowUserRequestsForAppAccess = null;

    /** Indicates whether resource-specific consent for personal scope in Teams apps is enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope. */
    public ?bool $isUserPersonalScopeResourceSpecificConsentEnabled = null;


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
        if (isset($data['allowUserRequestsForAppAccess'])) {
            $this->allowUserRequestsForAppAccess = $data['allowUserRequestsForAppAccess'];
        }
        if (isset($data['isUserPersonalScopeResourceSpecificConsentEnabled'])) {
            $this->isUserPersonalScopeResourceSpecificConsentEnabled = $data['isUserPersonalScopeResourceSpecificConsentEnabled'];
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
