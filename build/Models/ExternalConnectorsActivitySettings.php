<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsActivitySettings
 */
class ExternalConnectorsActivitySettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specifies configurations to identify an externalItem based on a shared URL.
     * @var ExternalConnectorsUrlToItemResolverBase[]
     */
    public array $urlToItemResolvers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['urlToItemResolvers'])) {
            $this->urlToItemResolvers = $data['urlToItemResolvers'];
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
