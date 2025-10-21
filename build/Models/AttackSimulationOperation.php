<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationOperation
 */
class AttackSimulationOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The start time of the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The time of the last action in the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastActionDateTime = null,
        /** URI of the resource that the operation is performed on. */
        public ?string $resourceLocation = null,
        /** The status of the operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. */
        public ?string $status = null,
        /** The status of a long-running operation. */
        public ?string $statusDetail = null,
        /** Percentage of completion of the respective operation. */
        public ?float $percentageCompleted = null,
        /** Tenant identifier. */
        public ?string $tenantId = null,
        /** The status of a long-running operation. */
        public ?string $type = null
    ) {}
}
