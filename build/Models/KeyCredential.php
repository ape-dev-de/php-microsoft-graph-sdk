<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyCredential
 */
class KeyCredential
{
    public function __construct(
        /** A 40-character binary type that can be used to identify the credential. Optional. When not provided in the payload, defaults to the thumbprint of the certificate. */
        public ?string $customKeyIdentifier = null,
        /** The friendly name for the key, with a maximum length of 90 characters. Longer values are accepted but shortened. Optional. */
        public ?string $displayName = null,
        /** The date and time at which the credential expires. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The certificate's raw data in byte array converted to Base64 string. Returned only on $select for a single object, that is, GET applications/{applicationId}?$select=keyCredentials or GET servicePrincipals/{servicePrincipalId}?$select=keyCredentials; otherwise, it's always null.  From a .cer certificate, you can read the key using the Convert.ToBase64String() method. For more information, see Get the certificate key. */
        public ?string $key = null,
        /** The unique identifier (GUID) for the key. */
        public ?string $keyId = null,
        /** The date and time at which the credential becomes valid.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The type of key credential; for example, Symmetric, AsymmetricX509Cert. */
        public ?string $type = null,
        /** A string that describes the purpose for which the key can be used; for example, Verify. */
        public ?string $usage = null
    ) {}
}
