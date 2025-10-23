<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPort
 */
class SecurityHostPort
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The hostPortBanners retrieved from scanning the port.
     * @var SecurityHostPortBanner[]
     */
    public array $banners = [];

    /** The first date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The last date and time when Microsoft Defender Threat Intelligence scanned the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastScanDateTime = null;

    /** The last date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The numerical identifier of the port which is standardized across the internet. */
    public ?float $port = null;

    /** 
     * The general protocol used to scan the port. The possible values are: tcp, udp, unknownFutureValue.
     * @var SecurityHostPortProtocol|\stdClass|null
     */
    public mixed $protocol = null;

    /** 
     * The hostPortComponents retrieved from scanning the port.
     * @var SecurityHostPortComponent[]
     */
    public array $services = [];

    /** 
     * The status of the port. The possible values are: open, filtered, closed, unknownFutureValue.
     * @var SecurityHostPortStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPort in all its scans. */
    public ?float $timesObserved = null;

    /**  */
    public ?SecurityHost $host = null;

    /** 
     * The most recent sslCertificate used to communicate on the port.
     * @var SecuritySslCertificate|\stdClass|null
     */
    public mixed $mostRecentSslCertificate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['banners'])) {
            $this->banners = $data['banners'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = is_string($data['firstSeenDateTime']) ? new \DateTimeImmutable($data['firstSeenDateTime']) : $data['firstSeenDateTime'];
        }
        if (isset($data['lastScanDateTime'])) {
            $this->lastScanDateTime = is_string($data['lastScanDateTime']) ? new \DateTimeImmutable($data['lastScanDateTime']) : $data['lastScanDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = is_string($data['lastSeenDateTime']) ? new \DateTimeImmutable($data['lastSeenDateTime']) : $data['lastSeenDateTime'];
        }
        if (isset($data['port'])) {
            $this->port = $data['port'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = is_array($data['protocol']) ? new SecurityHostPortProtocol($data['protocol']) : $data['protocol'];
        }
        if (isset($data['services'])) {
            $this->services = $data['services'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityHostPortStatus($data['status']) : $data['status'];
        }
        if (isset($data['timesObserved'])) {
            $this->timesObserved = $data['timesObserved'];
        }
        if (isset($data['host'])) {
            $this->host = is_array($data['host']) ? new SecurityHost($data['host']) : $data['host'];
        }
        if (isset($data['mostRecentSslCertificate'])) {
            $this->mostRecentSslCertificate = is_array($data['mostRecentSslCertificate']) ? new SecuritySslCertificate($data['mostRecentSslCertificate']) : $data['mostRecentSslCertificate'];
        }
    }
}
