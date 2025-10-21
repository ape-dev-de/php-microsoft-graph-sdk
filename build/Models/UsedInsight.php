<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsedInsight
 */
class UsedInsight
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Information about when the item was last viewed or modified by the user. Read-only. */
        public ?string $lastUsed = null,
        /** Reference properties of the used document, such as the URL and type of the document. Read-only */
        public ?string $resourceReference = null,
        /** Properties that you can use to visualize the document in your experience. Read-only */
        public ?string $resourceVisualization = null,
        /** Used for navigating to the item that was used. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem. */
        public ?string $resource = null
    ) {}
}
