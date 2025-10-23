<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedInsight
 */
class SharedInsight
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Details about the shared item. Read only.
     * @var SharingDetail|\stdClass|null
     */
    public mixed $lastShared = null;

    /** 
     * Reference properties of the shared document, such as the url and type of the document. Read-only
     * @var ResourceReference|\stdClass|null
     */
    public mixed $resourceReference = null;

    /** 
     * Properties that you can use to visualize the document in your experience. Read-only
     * @var ResourceVisualization|\stdClass|null
     */
    public mixed $resourceVisualization = null;

    /** 
     * 
     * @var SharingDetail[]
     */
    public array $sharingHistory = [];

    /** 
     * 
     * @var Entity|\stdClass|null
     */
    public mixed $lastSharedMethod = null;

    /** 
     * Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
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
        if (isset($data['lastShared'])) {
            $this->lastShared = $data['lastShared'];
        }
        if (isset($data['resourceReference'])) {
            $this->resourceReference = $data['resourceReference'];
        }
        if (isset($data['resourceVisualization'])) {
            $this->resourceVisualization = $data['resourceVisualization'];
        }
        if (isset($data['sharingHistory'])) {
            $this->sharingHistory = $data['sharingHistory'];
        }
        if (isset($data['lastSharedMethod'])) {
            $this->lastSharedMethod = $data['lastSharedMethod'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
    }
}
