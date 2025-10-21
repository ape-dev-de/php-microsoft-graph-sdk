<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionExternalUsersSelfServiceSignUp
 */
class OnAttributeCollectionExternalUsersSelfServiceSignUp
{
    public function __construct(
        /** Required. The configuration for how attributes are displayed in the sign-up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page. */
        public ?AuthenticationAttributeCollectionPage $attributeCollectionPage = null,
        /**  */
        public array $attributes = []
    ) {}
}
