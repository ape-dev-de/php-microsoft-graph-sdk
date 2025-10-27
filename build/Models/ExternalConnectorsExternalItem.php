<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItem
 */
class ExternalConnectorsExternalItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     * @var ExternalConnectorsAcl[]
     */
    public array $acl = [];

    /** 
     * A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     * @var ExternalConnectorsExternalItemContent|\stdClass|null
     */
    public ExternalConnectorsExternalItemContent|\stdClass|null $content = null;

    /** 
     * A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     * @var ExternalConnectorsProperties|\stdClass|null
     */
    public ExternalConnectorsProperties|\stdClass|null $properties = null;

    /** 
     * Returns a list of activities performed on the item. Write-only.
     * @var ExternalConnectorsExternalActivity[]
     */
    public array $activities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['acl'])) {
            $this->acl = $data['acl'];
        }
        if (isset($data['content'])) {
            $this->content = is_array($data['content']) ? new ExternalConnectorsExternalItemContent($data['content']) : $data['content'];
        }
        if (isset($data['properties'])) {
            $this->properties = is_array($data['properties']) ? new ExternalConnectorsProperties($data['properties']) : $data['properties'];
        }
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
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
