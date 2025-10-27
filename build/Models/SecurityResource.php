<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResource
 */
class SecurityResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the resource that is related to current alert. Required. */
    public ?string $resource = null;

    /** 
     * Represents type of security resources related to an alert. Possible values are: attacked, related.
     * @var SecurityResourceType|\stdClass|null
     */
    public SecurityResourceType|\stdClass|null $resourceType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
        if (isset($data['resourceType'])) {
            $this->resourceType = is_array($data['resourceType']) ? new SecurityResourceType($data['resourceType']) : $data['resourceType'];
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
