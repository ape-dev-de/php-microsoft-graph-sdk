<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Trending
 */
class Trending
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Reference properties of the trending document, such as the url and type of the document.
     * @var ResourceReference|\stdClass|null
     */
    public ResourceReference|\stdClass|null $resourceReference = null;

    /** 
     * Properties that you can use to visualize the document in your experience.
     * @var ResourceVisualization|\stdClass|null
     */
    public ResourceVisualization|\stdClass|null $resourceVisualization = null;

    /** 
     * Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $weight = null;

    /** 
     * Used for navigating to the trending document.
     * @var Entity|\stdClass|null
     */
    public Entity|\stdClass|null $resource = null;


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
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['resourceReference'])) {
            $this->resourceReference = is_array($data['resourceReference']) ? new ResourceReference($data['resourceReference']) : $data['resourceReference'];
        }
        if (isset($data['resourceVisualization'])) {
            $this->resourceVisualization = is_array($data['resourceVisualization']) ? new ResourceVisualization($data['resourceVisualization']) : $data['resourceVisualization'];
        }
        if (isset($data['weight'])) {
            $this->weight = is_numeric($data['weight']) ? (float)$data['weight'] : $data['weight'];
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
