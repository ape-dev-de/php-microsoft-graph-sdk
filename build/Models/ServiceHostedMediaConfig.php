<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHostedMediaConfig
 */
class ServiceHostedMediaConfig
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The list of media to pre-fetch.
     * @var MediaInfo[]
     */
    public array $preFetchMedia = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['preFetchMedia'])) {
            $this->preFetchMedia = $data['preFetchMedia'];
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
