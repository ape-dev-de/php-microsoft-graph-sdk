<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditResource
 */
class AuditResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Audit resource's type. */
    public ?string $auditResourceType = null;

    /** Display name. */
    public ?string $displayName = null;

    /** 
     * List of modified properties.
     * @var AuditProperty[]
     */
    public array $modifiedProperties = [];

    /** Audit resource's Id. */
    public ?string $resourceId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['auditResourceType'])) {
            $this->auditResourceType = $data['auditResourceType'];
        }
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
