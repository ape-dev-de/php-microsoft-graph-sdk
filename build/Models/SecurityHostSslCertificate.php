<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostSslCertificate
 */
class SecurityHostSslCertificate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The first date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The most recent date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** 
     * The ports related with this hostSslCertificate.
     * @var SecurityHostSslCertificatePort[]
     */
    public array $ports = [];

    /** 
     * The host for this hostSslCertificate.
     * @var SecurityHost|\stdClass|null
     */
    public mixed $host = null;

    /** 
     * The sslCertificate for this hostSslCertificate.
     * @var SecuritySslCertificate|\stdClass|null
     */
    public mixed $sslCertificate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = $data['lastSeenDateTime'];
        }
        if (isset($data['ports'])) {
            $this->ports = $data['ports'];
        }
        if (isset($data['host'])) {
            $this->host = $data['host'];
        }
        if (isset($data['sslCertificate'])) {
            $this->sslCertificate = $data['sslCertificate'];
        }
    }
}
