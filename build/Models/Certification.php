<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Certification
 */
class Certification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** URL that shows certification details for the application. */
    public ?string $certificationDetailsUrl = null;

    /** The timestamp when the current certification for the application expires. */
    public ?\DateTimeInterface $certificationExpirationDateTime = null;

    /** Indicates whether the application is certified by Microsoft. */
    public ?bool $isCertifiedByMicrosoft = null;

    /** Indicates whether the application developer or publisher completed Publisher Attestation. */
    public ?bool $isPublisherAttested = null;

    /** The timestamp when the certification for the application was most recently added or updated. */
    public ?\DateTimeInterface $lastCertificationDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['certificationDetailsUrl'])) {
            $this->certificationDetailsUrl = $data['certificationDetailsUrl'];
        }
        if (isset($data['certificationExpirationDateTime'])) {
            $this->certificationExpirationDateTime = is_string($data['certificationExpirationDateTime']) ? new \DateTimeImmutable($data['certificationExpirationDateTime']) : $data['certificationExpirationDateTime'];
        }
        if (isset($data['isCertifiedByMicrosoft'])) {
            $this->isCertifiedByMicrosoft = $data['isCertifiedByMicrosoft'];
        }
        if (isset($data['isPublisherAttested'])) {
            $this->isPublisherAttested = $data['isPublisherAttested'];
        }
        if (isset($data['lastCertificationDateTime'])) {
            $this->lastCertificationDateTime = is_string($data['lastCertificationDateTime']) ? new \DateTimeImmutable($data['lastCertificationDateTime']) : $data['lastCertificationDateTime'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
