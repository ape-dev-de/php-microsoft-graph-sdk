<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomer
 */
class BookingCustomer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Addresses associated with the customer. The attribute type of physicalAddress isn't supported in v1.0. Internally we map the addresses to the type others. */
        public array $addresses = [],
        /** The date, time, and time zone when the customer was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the customer. */
        public ?string $displayName = null,
        /** The SMTP address of the customer. */
        public ?string $emailAddress = null,
        /** The date, time, and time zone when the customer was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** @var string[] Represents a customer of the business. */
        public array $phones = []
    ) {}
}
