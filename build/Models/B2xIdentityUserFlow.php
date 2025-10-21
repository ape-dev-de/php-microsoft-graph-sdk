<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * B2xIdentityUserFlow
 */
class B2xIdentityUserFlow
{
    public function __construct(
        /** Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration. */
        public ?string $apiConnectorConfiguration = null,
        /** The identity providers included in the user flow. */
        public array $identityProviders = [],
        /** The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You can't create custom languages in self-service sign-up user flows. */
        public array $languages = [],
        /** The user attribute assignments included in the user flow. */
        public array $userAttributeAssignments = [],
        /** @var string[]  */
        public array $userFlowIdentityProviders = []
    ) {}
}
