<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalSignIn
 */
class ServicePrincipalSignIn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** appId of the service principal that is signing in. */
    public ?string $servicePrincipalId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['servicePrincipalId'])) {
            $this->servicePrincipalId = $data['servicePrincipalId'];
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
