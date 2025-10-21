<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchIdentitySet
 */
class SearchIdentitySet
{
    public function __construct(
        /**  */
        public ?string $application = null,
        /**  */
        public ?string $device = null,
        /**  */
        public ?string $user = null
    ) {}
}
