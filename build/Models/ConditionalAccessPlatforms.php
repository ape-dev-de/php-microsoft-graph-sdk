<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPlatforms
 */
class ConditionalAccessPlatforms
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @var ConditionalAccessDevicePlatform[]
     */
    public array $excludePlatforms = [];

    /** 
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @var ConditionalAccessDevicePlatform[]
     */
    public array $includePlatforms = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['excludePlatforms'])) {
            $this->excludePlatforms = $data['excludePlatforms'];
        }
        if (isset($data['includePlatforms'])) {
            $this->includePlatforms = $data['includePlatforms'];
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
