<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnterpriseCodeSigningCertificate
 */
class EnterpriseCodeSigningCertificate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Windows Enterprise Code-Signing Certificate in the raw data format. Set to null once certificate has been uploaded and other properties have been populated. */
    public ?string $content = null;

    /** The cert expiration date and time (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** The issuer value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?string $issuer = null;

    /** The issuer name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?string $issuerName = null;

    /**  */
    public ?CertificateStatus $status = null;

    /** The subject value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?string $subject = null;

    /** The subject name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?string $subjectName = null;

    /** The date time of CodeSigning Cert when it is uploaded (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. */
    public ?\DateTimeInterface $uploadDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['issuer'])) {
            $this->issuer = $data['issuer'];
        }
        if (isset($data['issuerName'])) {
            $this->issuerName = $data['issuerName'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new CertificateStatus($data['status']) : $data['status'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['subjectName'])) {
            $this->subjectName = $data['subjectName'];
        }
        if (isset($data['uploadDateTime'])) {
            $this->uploadDateTime = is_string($data['uploadDateTime']) ? new \DateTimeImmutable($data['uploadDateTime']) : $data['uploadDateTime'];
        }
    }
}
