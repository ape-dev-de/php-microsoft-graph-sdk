<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentitySource
 */
class SocialIdentitySource
{
    public function __construct(
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?SocialIdentitySourceType $socialIdentitySourceType = null
    ) {}
}
