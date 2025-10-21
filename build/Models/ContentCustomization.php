<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentCustomization
 */
class ContentCustomization
{
    public function __construct(
        /** Represents the content options of External Identities to be customized throughout the authentication flow for a tenant. */
        public array $attributeCollection = [],
        /** A relative URL for the content options of External Identities to be customized throughout the authentication flow for a tenant. */
        public ?string $attributeCollectionRelativeUrl = null,
        /** Represents content options to customize during MFA proofup interruptions. */
        public array $registrationCampaign = [],
        /** The relative URL of the content options to customize during MFA proofup interruptions. */
        public ?string $registrationCampaignRelativeUrl = null
    ) {}
}
