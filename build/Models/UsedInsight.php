<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsedInsight
 */
class UsedInsight
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['lastUsed'])) {
            $this->lastUsed = $data['lastUsed'];
        }
        if (isset($data['resourceReference'])) {
            $this->resourceReference = $data['resourceReference'];
        }
        if (isset($data['resourceVisualization'])) {
            $this->resourceVisualization = $data['resourceVisualization'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
    }
}
