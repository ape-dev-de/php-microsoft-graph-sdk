<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisContact
 */
class SecurityWhoisContact
{
    public function __construct(
        /** The physical address of the entity. */
        public ?string $address = null,
        /** The email of this WHOIS contact. */
        public ?string $email = null,
        /** The fax of this WHOIS contact. No format is guaranteed. */
        public ?string $fax = null,
        /** The name of this WHOIS contact. */
        public ?string $name = null,
        /** The organization of this WHOIS contact. */
        public ?string $organization = null,
        /** The telephone of this WHOIS contact. No format is guaranteed. */
        public ?string $telephone = null
    ) {}
}
