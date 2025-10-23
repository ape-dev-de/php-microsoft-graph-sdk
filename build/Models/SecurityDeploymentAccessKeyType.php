<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeploymentAccessKeyType
 */
class SecurityDeploymentAccessKeyType
{
    /** The deployment access key. */
    public ?string $deploymentAccessKey = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deploymentAccessKey'])) {
            $this->deploymentAccessKey = $data['deploymentAccessKey'];
        }
    }
}
