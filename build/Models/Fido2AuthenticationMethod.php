<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethod
 */
class Fido2AuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Authenticator Attestation GUID, an identifier that indicates the type (e.g. make and model) of the authenticator. */
        public ?string $aaGuid = null,
        /** @var string[] The attestation certificate(s) attached to this security key. */
        public array $attestationCertificates = [],
        /** The attestation level of this FIDO2 security key. Possible values are: attested, or notAttested. */
        public ?string $attestationLevel = null,
        /** The timestamp when this key was registered to the user. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The display name of the key as given by the user. */
        public ?string $displayName = null,
        /** The manufacturer-assigned model of the FIDO2 security key. */
        public ?string $model = null
    ) {}
}
