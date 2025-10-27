<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthority
 */
class CertificateAuthority
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Required. The base64 encoded string representing the public certificate. */
    public ?string $certificate = null;

    /** The URL of the certificate revocation list. */
    public ?string $certificateRevocationListUrl = null;

    /** The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created. */
    public ?string $deltaCertificateRevocationListUrl = null;

    /** Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority. */
    public ?bool $isRootAuthority = null;

    /** The issuer of the certificate, calculated from the certificate value. Read-only. */
    public ?string $issuer = null;

    /** The subject key identifier of the certificate, calculated from the certificate value. Read-only. */
    public ?string $issuerSki = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['certificateRevocationListUrl'])) {
            $this->certificateRevocationListUrl = $data['certificateRevocationListUrl'];
        }
        if (isset($data['deltaCertificateRevocationListUrl'])) {
            $this->deltaCertificateRevocationListUrl = $data['deltaCertificateRevocationListUrl'];
        }
        if (isset($data['isRootAuthority'])) {
            $this->isRootAuthority = $data['isRootAuthority'];
        }
        if (isset($data['issuer'])) {
            $this->issuer = $data['issuer'];
        }
        if (isset($data['issuerSki'])) {
            $this->issuerSki = $data['issuerSki'];
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
