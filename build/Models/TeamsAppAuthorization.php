<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppAuthorization
 */
class TeamsAppAuthorization
{
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
        if (isset($data['clientAppId'])) {
            $this->clientAppId = $data['clientAppId'];
        }
        if (isset($data['requiredPermissionSet'])) {
            $this->requiredPermissionSet = $data['requiredPermissionSet'];
        }
    }
}
