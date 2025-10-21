<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteOperation
 */
class OnenoteOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The start time of the operation. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The time of the last action of the operation. */
        public ?\DateTimeInterface $lastActionDateTime = null,
        /** The current status of the operation: notStarted, running, completed, failed */
        public ?OperationStatus $status = null,
        /** The error returned by the operation. */
        public ?OnenoteOperationError $error = null,
        /** The operation percent complete if the operation is still in running status. */
        public ?string $percentComplete = null,
        /** The resource id. */
        public ?string $resourceId = null,
        /** The resource URI for the object. For example, the resource URI for a copied page or section. */
        public ?string $resourceLocation = null
    ) {}
}
