<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceVisualization
 */
class ResourceVisualization
{
    public function __construct(
        /** A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item. */
        public ?string $containerDisplayName = null,
        /** Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness. */
        public ?string $containerType = null,
        /** A path leading to the folder in which the item is stored. */
        public ?string $containerWebUrl = null,
        /** The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Not all Media Mime Types are supported. */
        public ?string $mediaType = null,
        /** A URL leading to the preview image for the item. */
        public ?string $previewImageUrl = null,
        /** A preview text for the item. */
        public ?string $previewText = null,
        /** The item's title text. */
        public ?string $title = null,
        /** The item's media type. Can be used for filtering for a specific file based on a specific type. See the section Type property values for supported types. */
        public ?string $type = null
    ) {}
}
