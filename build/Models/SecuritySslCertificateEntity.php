<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificateEntity
 */
class SecuritySslCertificateEntity
{
    public function __construct(
        /** A physical address of the entity. */
        public ?string $address = null,
        /** @var string[] Alternate names for this entity that are part of the certificate. */
        public array $alternateNames = [],
        /** A common name for this entity. */
        public ?string $commonName = null,
        /** An email for this entity. */
        public ?string $email = null,
        /** If the entity is a person, this is the person's given name (first name). */
        public ?string $givenName = null,
        /** If the entity is an organization, this is the name of the organization. */
        public ?string $organizationName = null,
        /** If the entity is an organization, this communicates if a unit in the organization is named on the entity. */
        public ?string $organizationUnitName = null,
        /** A serial number assigned to the entity; usually only available if the entity is the issuer. */
        public ?string $serialNumber = null,
        /** If the entity is a person, this is the person's surname (last name). */
        public ?string $surname = null
    ) {}
}
