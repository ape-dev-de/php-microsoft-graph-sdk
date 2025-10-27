<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditResource
 */
class CloudPcAuditResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The display name of the modified resource entity. */
    public ?string $displayName = null;

    /** 
     * The list of modified properties.
     * @var CloudPcAuditProperty[]
     */
    public array $modifiedProperties = [];

    /** The unique identifier of the modified resource entity. */
    public ?string $resourceId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['modifiedProperties'])) {
            $this->modifiedProperties = $data['modifiedProperties'];
        }
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
