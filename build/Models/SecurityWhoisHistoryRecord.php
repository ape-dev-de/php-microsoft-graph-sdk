<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisHistoryRecord
 */
class SecurityWhoisHistoryRecord
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The contact information for the abuse contact. */
        public ?SecurityWhoisContact $abuse = null,
        /** The contact information for the admin contact. */
        public ?SecurityWhoisContact $admin = null,
        /** The contact information for the billing contact. */
        public ?SecurityWhoisContact $billing = null,
        /** The domain status for this WHOIS object. */
        public ?string $domainStatus = null,
        /** The date and time when this WHOIS record expires with the registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** The first seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The last seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The date and time when this WHOIS record was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** The nameservers for this WHOIS object. */
        public array $nameservers = [],
        /** The contact information for the noc contact. */
        public ?SecurityWhoisContact $noc = null,
        /** The raw WHOIS details for this WHOIS object. */
        public ?string $rawWhoisText = null,
        /** The contact information for the registrant contact. */
        public ?SecurityWhoisContact $registrant = null,
        /** The contact information for the registrar contact. */
        public ?SecurityWhoisContact $registrar = null,
        /** The date and time when this WHOIS record was registered with a registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $registrationDateTime = null,
        /** The contact information for the technical contact. */
        public ?SecurityWhoisContact $technical = null,
        /** The WHOIS server that provides the details. */
        public ?string $whoisServer = null,
        /** The contact information for the zone contact. */
        public ?SecurityWhoisContact $zone = null,
        /**  */
        public ?SecurityHost $host = null
    ) {}
}
