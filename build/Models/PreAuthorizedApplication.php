<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PreAuthorizedApplication
 */
class PreAuthorizedApplication
{
    /** The unique identifier for the application. */
    public ?string $appId = null;

    /** 
     * The unique identifier for the oauth2PermissionScopes the application requires.
     * @var string[]
     */
    public array $delegatedPermissionIds = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['delegatedPermissionIds'])) {
            $this->delegatedPermissionIds = $data['delegatedPermissionIds'];
        }
    }
}
