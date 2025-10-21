<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisBaseRecord resources
 *
 * Available select fields:
 * - abuse
 * - admin
 * - billing
 * - domainStatus
 * - expirationDateTime
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - lastUpdateDateTime
 * - nameservers
 * - noc
 * - rawWhoisText
 * - registrant
 * - registrar
 * - registrationDateTime
 * - technical
 * - whoisServer
 * - zone
 * - host
 */
class SecurityWhoisBaseRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisBaseRecord
     */
    public const FIELD_ABUSE = 'abuse';
    public const FIELD_ADMIN = 'admin';
    public const FIELD_BILLING = 'billing';
    public const FIELD_DOMAIN_STATUS = 'domainStatus';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_NAMESERVERS = 'nameservers';
    public const FIELD_NOC = 'noc';
    public const FIELD_RAW_WHOIS_TEXT = 'rawWhoisText';
    public const FIELD_REGISTRANT = 'registrant';
    public const FIELD_REGISTRAR = 'registrar';
    public const FIELD_REGISTRATION_DATE_TIME = 'registrationDateTime';
    public const FIELD_TECHNICAL = 'technical';
    public const FIELD_WHOIS_SERVER = 'whoisServer';
    public const FIELD_ZONE = 'zone';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecurityWhoisBaseRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
