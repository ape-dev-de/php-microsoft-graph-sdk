<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResource
 */
class SecurityResource
{
    /** Name of the resource that is related to current alert. Required. */
    public ?string $resource = null;

    /** 
     * Represents type of security resources related to an alert. Possible values are: attacked, related.
     * @var SecurityResourceType|\stdClass|null
     */
    public mixed $resourceType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
        if (isset($data['resourceType'])) {
            $this->resourceType = is_array($data['resourceType']) ? new SecurityResourceType($data['resourceType']) : $data['resourceType'];
        }
    }
}
