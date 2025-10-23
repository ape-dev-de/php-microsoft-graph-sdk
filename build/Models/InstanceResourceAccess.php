<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InstanceResourceAccess
 */
class InstanceResourceAccess
{
    /** 
     * 
     * @var ResourcePermission[]
     */
    public array $permissions = [];

    /**  */
    public ?string $resourceAppId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['permissions'])) {
            $this->permissions = $data['permissions'];
        }
        if (isset($data['resourceAppId'])) {
            $this->resourceAppId = $data['resourceAppId'];
        }
    }
}
