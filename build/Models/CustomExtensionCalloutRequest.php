<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutRequest
 */
class CustomExtensionCalloutRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Contains the data that will be provided to the external system.
     * @var CustomExtensionData|\stdClass|null
     */
    public mixed $data = null;

    /** Identifies the source system or event context related to the callout request. */
    public ?string $source = null;

    /** Describes the type of event related to the callout request. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['data'])) {
            $this->data = is_array($data['data']) ? new CustomExtensionData($data['data']) : $data['data'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
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
