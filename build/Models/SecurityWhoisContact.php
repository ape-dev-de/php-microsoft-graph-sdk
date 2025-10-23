<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisContact
 */
class SecurityWhoisContact
{
    /** 
     * The physical address of the entity.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** The email of this WHOIS contact. */
    public ?string $email = null;

    /** The fax of this WHOIS contact. No format is guaranteed. */
    public ?string $fax = null;

    /** The name of this WHOIS contact. */
    public ?string $name = null;

    /** The organization of this WHOIS contact. */
    public ?string $organization = null;

    /** The telephone of this WHOIS contact. No format is guaranteed. */
    public ?string $telephone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = is_array($data['address']) ? new PhysicalAddress($data['address']) : $data['address'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['fax'])) {
            $this->fax = $data['fax'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['organization'])) {
            $this->organization = $data['organization'];
        }
        if (isset($data['telephone'])) {
            $this->telephone = $data['telephone'];
        }
    }
}
