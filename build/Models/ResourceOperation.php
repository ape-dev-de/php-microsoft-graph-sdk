<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceOperation
 */
class ResourceOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible. */
        public ?string $actionName = null,
        /** Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal. */
        public ?string $description = null,
        /** Name of the Resource this operation is performed on. */
        public ?string $resourceName = null
    ) {}
}
