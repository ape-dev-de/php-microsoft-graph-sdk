<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsCnameRecord
 */
class DomainDnsCnameRecord
{
    public function __construct(
        /** The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host. */
        public ?string $canonicalName = null
    ) {}
}
