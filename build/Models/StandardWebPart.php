<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardWebPart
 */
class StandardWebPart
{
    public function __construct(
        /** The instance identifier of the container text webPart. It only works for inline standard webPart in rich text webParts. */
        public ?string $containerTextWebPartId = null,
        /** Data of the webPart. */
        public ?string $data = null,
        /** A Guid that indicates the webPart type. */
        public ?string $webPartType = null
    ) {}
}
