<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItem
 */
class ListItem
{
    public function __construct(
        /** The content type of this list item */
        public ?string $contentType = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** Analytics about the view activities that took place on this item. */
        public ?string $analytics = null,
        /** Version information for a document set version created by a user. */
        public array $documentSetVersions = [],
        /** For document libraries, the driveItem relationship exposes the listItem as a driveItem */
        public ?string $driveItem = null,
        /** The values of the columns set on this list item. */
        public ?string $fields = null,
        /** @var string[] The list of previous versions of the list item. */
        public array $versions = []
    ) {}
}
