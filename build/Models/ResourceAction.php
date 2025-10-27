<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceAction
 */
class ResourceAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Allowed Actions
     * @var string[]
     */
    public array $allowedResourceActions = [];

    /** 
     * Not Allowed Actions.
     * @var string[]
     */
    public array $notAllowedResourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedResourceActions'])) {
            $this->allowedResourceActions = $data['allowedResourceActions'];
        }
        if (isset($data['notAllowedResourceActions'])) {
            $this->notAllowedResourceActions = $data['notAllowedResourceActions'];
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
