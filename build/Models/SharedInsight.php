<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedInsight
 */
class SharedInsight
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Details about the shared item. Read only. */
        public ?string $lastShared = null,
        /** Reference properties of the shared document, such as the url and type of the document. Read-only */
        public ?string $resourceReference = null,
        /** Properties that you can use to visualize the document in your experience. Read-only */
        public ?string $resourceVisualization = null,
        /**  */
        public array $sharingHistory = [],
        /**  */
        public ?string $lastSharedMethod = null,
        /** Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem. */
        public ?string $resource = null
    ) {}
}
