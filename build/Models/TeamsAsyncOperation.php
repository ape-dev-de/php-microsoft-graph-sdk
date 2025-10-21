<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAsyncOperation
 */
class TeamsAsyncOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Number of times the operation was attempted before being marked successful or failed. */
        public ?float $attemptsCount = null,
        /** Time when the operation was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Any error that causes the async operation to fail. */
        public ?string $error = null,
        /** Time when the async operation was last updated. */
        public ?\DateTimeInterface $lastActionDateTime = null,
        /**  */
        public ?string $operationType = null,
        /**  */
        public ?string $status = null,
        /** The ID of the object that's created or modified as result of this async operation, typically a team. */
        public ?string $targetResourceId = null,
        /** The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths. */
        public ?string $targetResourceLocation = null
    ) {}
}
