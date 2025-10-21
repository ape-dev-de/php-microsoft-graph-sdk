<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthorityDetail
 */
class CertificateAuthorityDetail
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The public key of the certificate authority. */
        public ?string $certificate = null,
        /** The type of certificate authority. The possible values are: root, intermediate, unknownFutureValue. Supports $filter (eq). */
        public ?string $certificateAuthorityType = null,
        /** The URL to check if the certificate is revoked. */
        public ?string $certificateRevocationListUrl = null,
        /** The date and time when the certificate authority was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $deltaCertificateRevocationListUrl = null,
        /** The display name of the certificate authority. */
        public ?string $displayName = null,
        /** The date and time when the certificate authority expires. Supports $filter (eq) and $orderby. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Indicates whether the certificate picker presents the certificate authority to the user to use for authentication. Default value is false. Optional. */
        public ?bool $isIssuerHintEnabled = null,
        /** The issuer of the certificate authority. */
        public ?string $issuer = null,
        /** The subject key identifier of certificate authority. */
        public ?string $issuerSubjectKeyIdentifier = null,
        /** The thumbprint of certificate authority certificate. Supports $filter (eq, startswith). */
        public ?string $thumbprint = null
    ) {}
}
