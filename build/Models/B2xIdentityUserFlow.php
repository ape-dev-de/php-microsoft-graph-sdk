<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * B2xIdentityUserFlow
 */
class B2xIdentityUserFlow
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?UserFlowType $userFlowType = null,
        /**  */
        public ?string $userFlowTypeVersion = null,
        /** Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration. */
        public ?UserFlowApiConnectorConfiguration $apiConnectorConfiguration = null,
        /** The identity providers included in the user flow. */
        public array $identityProviders = [],
        /** The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You can't create custom languages in self-service sign-up user flows. */
        public array $languages = [],
        /** The user attribute assignments included in the user flow. */
        public array $userAttributeAssignments = [],
        /**  */
        public array $userFlowIdentityProviders = []
    ) {}
}
