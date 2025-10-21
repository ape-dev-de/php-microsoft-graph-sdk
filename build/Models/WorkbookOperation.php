<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperation
 */
class WorkbookOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The error returned by the operation. */
        public ?WorkbookOperationError $error = null,
        /** The resource URI for the result. */
        public ?string $resourceLocation = null,
        /**  */
        public ?WorkbookOperationStatus $status = null
    ) {}
}
