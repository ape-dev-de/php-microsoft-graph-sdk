<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureAdTokenAuthentication
 */
class AzureAdTokenAuthentication
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The appID of the Microsoft Entra application to use to authenticate an app with a custom extension. */
    public ?string $resourceId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
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
