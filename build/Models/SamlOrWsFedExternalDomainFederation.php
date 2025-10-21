<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlOrWsFedExternalDomainFederation
 */
class SamlOrWsFedExternalDomainFederation
{
    public function __construct(
        /** @var string[] Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq). */
        public array $domains = []
    ) {}
}
