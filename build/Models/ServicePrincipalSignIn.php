<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalSignIn
 */
class ServicePrincipalSignIn
{
    /** appId of the service principal that is signing in. */
    public ?string $servicePrincipalId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['servicePrincipalId'])) {
            $this->servicePrincipalId = $data['servicePrincipalId'];
        }
    }
}
