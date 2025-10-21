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
        public ?SearchIdentity $application = null,
        /**  */
        public ?SearchIdentity $device = null,
        /**  */
        public ?SearchIdentity $user = null
    ) {}
}
