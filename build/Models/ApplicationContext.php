<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationContext
 */
class ApplicationContext
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Collection of appId values for the applications.
     * @var string[]
     */
    public array $includeApplications = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['includeApplications'])) {
            $this->includeApplications = $data['includeApplications'];
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
