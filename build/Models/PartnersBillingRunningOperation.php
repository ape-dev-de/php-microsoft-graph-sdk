<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingRunningOperation
 */
class PartnersBillingRunningOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The start time of the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The time of the last action of the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastActionDateTime = null;

    /** 
     * The status of the operation. Possible values are: notStarted, running, completed, failed, unknownFutureValue.
     * @var LongRunningOperationStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['lastActionDateTime'])) {
            $this->lastActionDateTime = $data['lastActionDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
