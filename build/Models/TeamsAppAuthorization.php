<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppAuthorization
 */
class TeamsAppAuthorization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The registration ID of the Microsoft Entra app ID associated with the teamsApp. */
    public ?string $clientAppId = null;

    /** 
     * Set of permissions required by the teamsApp.
     * @var TeamsAppPermissionSet|\stdClass|null
     */
    public mixed $requiredPermissionSet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['clientAppId'])) {
            $this->clientAppId = $data['clientAppId'];
        }
        if (isset($data['requiredPermissionSet'])) {
            $this->requiredPermissionSet = is_array($data['requiredPermissionSet']) ? new TeamsAppPermissionSet($data['requiredPermissionSet']) : $data['requiredPermissionSet'];
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
