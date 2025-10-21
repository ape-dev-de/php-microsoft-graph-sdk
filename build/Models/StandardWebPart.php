<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardWebPart
 */
class StandardWebPart
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The instance identifier of the container text webPart. It only works for inline standard webPart in rich text webParts. */
        public ?string $containerTextWebPartId = null,
        /** Data of the webPart. */
        public ?WebPartData $data = null,
        /** A Guid that indicates the webPart type. */
        public ?string $webPartType = null
    ) {}
}
