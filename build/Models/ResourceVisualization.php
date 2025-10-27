<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceVisualization
 */
class ResourceVisualization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item. */
    public ?string $containerDisplayName = null;

    /** Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness. */
    public ?string $containerType = null;

    /** A path leading to the folder in which the item is stored. */
    public ?string $containerWebUrl = null;

    /** The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Not all Media Mime Types are supported. */
    public ?string $mediaType = null;

    /** A URL leading to the preview image for the item. */
    public ?string $previewImageUrl = null;

    /** A preview text for the item. */
    public ?string $previewText = null;

    /** The item's title text. */
    public ?string $title = null;

    /** The item's media type. Can be used for filtering for a specific file based on a specific type. See the section Type property values for supported types. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['containerDisplayName'])) {
            $this->containerDisplayName = $data['containerDisplayName'];
        }
        if (isset($data['containerType'])) {
            $this->containerType = $data['containerType'];
        }
        if (isset($data['containerWebUrl'])) {
            $this->containerWebUrl = $data['containerWebUrl'];
        }
        if (isset($data['mediaType'])) {
            $this->mediaType = $data['mediaType'];
        }
        if (isset($data['previewImageUrl'])) {
            $this->previewImageUrl = $data['previewImageUrl'];
        }
        if (isset($data['previewText'])) {
            $this->previewText = $data['previewText'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
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
