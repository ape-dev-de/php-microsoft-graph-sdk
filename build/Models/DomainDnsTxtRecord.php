<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsTxtRecord
 */
class DomainDnsTxtRecord
{
    public function __construct(
        /** Value used when configuring the text property at the DNS host. */
        public ?string $text = null
    ) {}
}
