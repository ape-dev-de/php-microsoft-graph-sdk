<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionRule
 */
class SiteProtectionRule
{
    public function __construct(
        /** Contains a site expression. For examples, see siteExpression example. */
        public ?string $siteExpression = null
    ) {}
}
