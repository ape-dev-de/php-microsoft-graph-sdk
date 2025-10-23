<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequiredResourceAccess
 */
class RequiredResourceAccess
{
    /** 
     * The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     * @var ResourceAccess[]
     */
    public array $resourceAccess = [];

    /** The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application. */
    public ?string $resourceAppId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['resourceAccess'])) {
            $this->resourceAccess = $data['resourceAccess'];
        }
        if (isset($data['resourceAppId'])) {
            $this->resourceAppId = $data['resourceAppId'];
        }
    }
}
