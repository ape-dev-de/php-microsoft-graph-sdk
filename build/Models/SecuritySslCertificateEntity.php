<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificateEntity
 */
class SecuritySslCertificateEntity
{
    /** 
     * A physical address of the entity.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** 
     * Alternate names for this entity that are part of the certificate.
     * @var string[]
     */
    public array $alternateNames = [];

    /** A common name for this entity. */
    public ?string $commonName = null;

    /** An email for this entity. */
    public ?string $email = null;

    /** If the entity is a person, this is the person's given name (first name). */
    public ?string $givenName = null;

    /** If the entity is an organization, this is the name of the organization. */
    public ?string $organizationName = null;

    /** If the entity is an organization, this communicates if a unit in the organization is named on the entity. */
    public ?string $organizationUnitName = null;

    /** A serial number assigned to the entity; usually only available if the entity is the issuer. */
    public ?string $serialNumber = null;

    /** If the entity is a person, this is the person's surname (last name). */
    public ?string $surname = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = is_array($data['address']) ? new PhysicalAddress($data['address']) : $data['address'];
        }
        if (isset($data['alternateNames'])) {
            $this->alternateNames = $data['alternateNames'];
        }
        if (isset($data['commonName'])) {
            $this->commonName = $data['commonName'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['givenName'])) {
            $this->givenName = $data['givenName'];
        }
        if (isset($data['organizationName'])) {
            $this->organizationName = $data['organizationName'];
        }
        if (isset($data['organizationUnitName'])) {
            $this->organizationUnitName = $data['organizationUnitName'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }
    }
}
