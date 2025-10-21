<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceProvisioningError
 */
class ServiceProvisioningError
{
    public function __construct(
        /** The date and time at which the error occurred. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates whether the error has been attended to. */
        public ?bool $isResolved = null,
        /** Qualified service instance (for example, ''SharePoint/Dublin'') that published the service error information. */
        public ?string $serviceInstance = null
    ) {}
}
