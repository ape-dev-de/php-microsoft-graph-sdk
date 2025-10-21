<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySasTokenEvidence
 */
class SecuritySasTokenEvidence
{
    public function __construct(
        /**  */
        public ?string $allowedIpAddresses = null,
        /** @var string[]  */
        public array $allowedResourceTypes = [],
        /** @var string[]  */
        public array $allowedServices = [],
        /**  */
        public ?\DateTimeInterface $expiryDateTime = null,
        /** @var string[]  */
        public array $permissions = [],
        /**  */
        public ?string $protocol = null,
        /**  */
        public ?string $signatureHash = null,
        /**  */
        public ?string $signedWith = null,
        /**  */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $storageResource = null
    ) {}
}
