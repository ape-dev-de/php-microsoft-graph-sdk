<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsMxRecord
 */
class DomainDnsMxRecord
{
    public function __construct(
        /** Value used when configuring the answer/destination/value of the MX record at the DNS host. */
        public ?string $mailExchange = null,
        /** Value used when configuring the Preference/Priority property of the MX record at the DNS host. */
        public ?string $preference = null
    ) {}
}
