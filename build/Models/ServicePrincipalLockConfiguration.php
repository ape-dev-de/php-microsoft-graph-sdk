<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalLockConfiguration
 */
class ServicePrincipalLockConfiguration
{
    public function __construct(
        /** Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId. */
        public ?bool $allProperties = null,
        /** Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign. */
        public ?bool $credentialsWithUsageSign = null,
        /** Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals. */
        public ?bool $credentialsWithUsageVerify = null,
        /** Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal. */
        public ?bool $isEnabled = null,
        /** Locks the tokenEncryptionKeyId property for modification on the service principal. */
        public ?string $tokenEncryptionKeyId = null
    ) {}
}
