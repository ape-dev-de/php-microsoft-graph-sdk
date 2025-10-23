<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificate
 */
class SecuritySslCertificate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when a certificate expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** A hash of the certificate calculated on the data and signature. */
    public ?string $fingerprint = null;

    /** The first date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The date and time when a certificate was issued. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $issueDateTime = null;

    /** 
     * The entity that grants this certificate.
     * @var SecuritySslCertificateEntity|\stdClass|null
     */
    public mixed $issuer = null;

    /** The most recent date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The serial number associated with an SSL certificate. */
    public ?string $serialNumber = null;

    /** A SHA-1 hash of the certificate. Note: This is not the signature. */
    public ?string $sha1 = null;

    /** 
     * The person, site, machine, and so on, this certificate is for.
     * @var SecuritySslCertificateEntity|\stdClass|null
     */
    public mixed $subject = null;

    /** 
     * The host resources related with this sslCertificate.
     * @var SecurityHost[]
     */
    public array $relatedHosts = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['fingerprint'])) {
            $this->fingerprint = $data['fingerprint'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['issueDateTime'])) {
            $this->issueDateTime = $data['issueDateTime'];
        }
        if (isset($data['issuer'])) {
            $this->issuer = $data['issuer'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = $data['lastSeenDateTime'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['sha1'])) {
            $this->sha1 = $data['sha1'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['relatedHosts'])) {
            $this->relatedHosts = $data['relatedHosts'];
        }
    }
}
