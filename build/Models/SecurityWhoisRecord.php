<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisRecord
 */
class SecurityWhoisRecord
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The contact information for the abuse contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $abuse = null;

    /** 
     * The contact information for the admin contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $admin = null;

    /** 
     * The contact information for the billing contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $billing = null;

    /** The domain status for this WHOIS object. */
    public ?string $domainStatus = null;

    /** The date and time when this WHOIS record expires with the registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** The first seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The last seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The date and time when this WHOIS record was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** 
     * The nameservers for this WHOIS object.
     * @var SecurityWhoisNameserver[]
     */
    public array $nameservers = [];

    /** 
     * The contact information for the noc contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $noc = null;

    /** The raw WHOIS details for this WHOIS object. */
    public ?string $rawWhoisText = null;

    /** 
     * The contact information for the registrant contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $registrant = null;

    /** 
     * The contact information for the registrar contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $registrar = null;

    /** The date and time when this WHOIS record was registered with a registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $registrationDateTime = null;

    /** 
     * The contact information for the technical contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $technical = null;

    /** The WHOIS server that provides the details. */
    public ?string $whoisServer = null;

    /** 
     * The contact information for the zone contact.
     * @var SecurityWhoisContact|\stdClass|null
     */
    public mixed $zone = null;

    /**  */
    public ?SecurityHost $host = null;

    /** 
     * The collection of historical records associated to this WHOIS object.
     * @var SecurityWhoisHistoryRecord[]
     */
    public array $history = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['abuse'])) {
            $this->abuse = $data['abuse'];
        }
        if (isset($data['admin'])) {
            $this->admin = $data['admin'];
        }
        if (isset($data['billing'])) {
            $this->billing = $data['billing'];
        }
        if (isset($data['domainStatus'])) {
            $this->domainStatus = $data['domainStatus'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = $data['lastSeenDateTime'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = $data['lastUpdateDateTime'];
        }
        if (isset($data['nameservers'])) {
            $this->nameservers = $data['nameservers'];
        }
        if (isset($data['noc'])) {
            $this->noc = $data['noc'];
        }
        if (isset($data['rawWhoisText'])) {
            $this->rawWhoisText = $data['rawWhoisText'];
        }
        if (isset($data['registrant'])) {
            $this->registrant = $data['registrant'];
        }
        if (isset($data['registrar'])) {
            $this->registrar = $data['registrar'];
        }
        if (isset($data['registrationDateTime'])) {
            $this->registrationDateTime = $data['registrationDateTime'];
        }
        if (isset($data['technical'])) {
            $this->technical = $data['technical'];
        }
        if (isset($data['whoisServer'])) {
            $this->whoisServer = $data['whoisServer'];
        }
        if (isset($data['zone'])) {
            $this->zone = $data['zone'];
        }
        if (isset($data['host'])) {
            $this->host = $data['host'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
    }
}
