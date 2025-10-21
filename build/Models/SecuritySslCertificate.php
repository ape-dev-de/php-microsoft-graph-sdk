<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificate
 */
class SecuritySslCertificate
{
    /**
     * The date and time when a certificate expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * A hash of the certificate calculated on the data and signature.
     */
    private ?string $fingerprint;

    /**
     * The first date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The date and time when a certificate was issued. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $issueDateTime;

    /**
     * The entity that grants this certificate.
     */
    private ?string $issuer;

    /**
     * The most recent date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The serial number associated with an SSL certificate.
     */
    private ?string $serialNumber;

    /**
     * A SHA-1 hash of the certificate. Note: This is not the signature.
     */
    private ?string $sha1;

    /**
     * The person, site, machine, and so on, this certificate is for.
     */
    private ?string $subject;

    /**
     * The host resources related with this sslCertificate.
     * @var string[]
     */
    private array $relatedHosts = [];


    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    public function setFingerprint(?string $fingerprint): self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }

    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getIssueDateTime(): ?\DateTimeInterface
    {
        return $this->issueDateTime;
    }

    public function setIssueDateTime(?\DateTimeInterface $issueDateTime): self
    {
        $this->issueDateTime = $issueDateTime;
        return $this;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): self
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getSha1(): ?string
    {
        return $this->sha1;
    }

    public function setSha1(?string $sha1): self
    {
        $this->sha1 = $sha1;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRelatedHosts(): array
    {
        return $this->relatedHosts;
    }

    /**
     * @param string[] $relatedHosts
     */
    public function setRelatedHosts(array $relatedHosts): self
    {
        $this->relatedHosts = $relatedHosts;
        return $this;
    }

}
