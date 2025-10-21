<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttribute
 */
class IdentityUserFlowAttribute
{
    public function __construct(
        /**  */
        public ?string $dataType = null,
        /** The description of the user flow attribute that's shown to the user at the time of sign up. */
        public ?string $description = null,
        /** The display name of the user flow attribute.  Supports $filter (eq, ne). */
        public ?string $displayName = null,
        /**  */
        public ?string $userFlowAttributeType = null
    ) {}
}
