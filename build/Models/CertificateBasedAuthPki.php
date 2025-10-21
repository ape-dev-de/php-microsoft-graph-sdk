<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthPki
 */
class CertificateBasedAuthPki
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The name of the object. Maximum length is 256 characters. */
        public ?string $displayName = null,
        /** The date and time when the object was created or last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The status of any asynchronous jobs runs on the object which can be upload or delete. */
        public ?string $status = null,
        /** The status details of the upload/deleted operation of PKI (Public Key Infrastructure). */
        public ?string $statusDetails = null,
        /** @var string[] The collection of certificate authorities contained in this public key infrastructure resource. */
        public array $certificateAuthorities = []
    ) {}
}
