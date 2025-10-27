<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsedInsight
 */
class UsedInsight
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Information about when the item was last viewed or modified by the user. Read-only.
     * @var UsageDetails|\stdClass|null
     */
    public mixed $lastUsed = null;

    /** 
     * Reference properties of the used document, such as the URL and type of the document. Read-only
     * @var ResourceReference|\stdClass|null
     */
    public mixed $resourceReference = null;

    /** 
     * Properties that you can use to visualize the document in your experience. Read-only
     * @var ResourceVisualization|\stdClass|null
     */
    public mixed $resourceVisualization = null;

    /** 
     * Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @var Entity|\stdClass|null
     */
    public mixed $resource = null;


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
        if (isset($data['lastUsed'])) {
            $this->lastUsed = is_array($data['lastUsed']) ? new UsageDetails($data['lastUsed']) : $data['lastUsed'];
        }
        if (isset($data['resourceReference'])) {
            $this->resourceReference = is_array($data['resourceReference']) ? new ResourceReference($data['resourceReference']) : $data['resourceReference'];
        }
        if (isset($data['resourceVisualization'])) {
            $this->resourceVisualization = is_array($data['resourceVisualization']) ? new ResourceVisualization($data['resourceVisualization']) : $data['resourceVisualization'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new Entity($data['resource']) : $data['resource'];
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
