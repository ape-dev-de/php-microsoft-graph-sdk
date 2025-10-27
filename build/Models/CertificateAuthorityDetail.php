<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthorityDetail
 */
class CertificateAuthorityDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** The public key of the certificate authority. */
    public ?string $certificate = null;

    /** 
     * The type of certificate authority. The possible values are: root, intermediate, unknownFutureValue. Supports $filter (eq).
     * @var CertificateAuthorityType|\stdClass|null
     */
    public CertificateAuthorityType|\stdClass|null $certificateAuthorityType = null;

    /** The URL to check if the certificate is revoked. */
    public ?string $certificateRevocationListUrl = null;

    /** The date and time when the certificate authority was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $deltaCertificateRevocationListUrl = null;

    /** The display name of the certificate authority. */
    public ?string $displayName = null;

    /** The date and time when the certificate authority expires. Supports $filter (eq) and $orderby. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Indicates whether the certificate picker presents the certificate authority to the user to use for authentication. Default value is false. Optional. */
    public ?bool $isIssuerHintEnabled = null;

    /** The issuer of the certificate authority. */
    public ?string $issuer = null;

    /** The subject key identifier of certificate authority. */
    public ?string $issuerSubjectKeyIdentifier = null;

    /** The thumbprint of certificate authority certificate. Supports $filter (eq, startswith). */
    public ?string $thumbprint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['certificateAuthorityType'])) {
            $this->certificateAuthorityType = is_array($data['certificateAuthorityType']) ? new CertificateAuthorityType($data['certificateAuthorityType']) : $data['certificateAuthorityType'];
        }
        if (isset($data['certificateRevocationListUrl'])) {
            $this->certificateRevocationListUrl = $data['certificateRevocationListUrl'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deltaCertificateRevocationListUrl'])) {
            $this->deltaCertificateRevocationListUrl = $data['deltaCertificateRevocationListUrl'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['isIssuerHintEnabled'])) {
            $this->isIssuerHintEnabled = $data['isIssuerHintEnabled'];
        }
        if (isset($data['issuer'])) {
            $this->issuer = $data['issuer'];
        }
        if (isset($data['issuerSubjectKeyIdentifier'])) {
            $this->issuerSubjectKeyIdentifier = $data['issuerSubjectKeyIdentifier'];
        }
        if (isset($data['thumbprint'])) {
            $this->thumbprint = $data['thumbprint'];
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
