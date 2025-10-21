<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityCustomUserFlowAttribute
 */
class IdentityCustomUserFlowAttribute
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?IdentityUserFlowAttributeDataType $dataType = null,
        /** The description of the user flow attribute that's shown to the user at the time of sign up. */
        public ?string $description = null,
        /** The display name of the user flow attribute.  Supports $filter (eq, ne). */
        public ?string $displayName = null,
        /**  */
        public ?IdentityUserFlowAttributeType $userFlowAttributeType = null
    ) {}
}
