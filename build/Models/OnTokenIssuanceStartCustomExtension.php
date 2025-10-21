<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtension
 */
class OnTokenIssuanceStartCustomExtension
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow. */
        public ?CustomExtensionAuthenticationConfiguration $authenticationConfiguration = null,
        /** HTTP connection settings that define how long Microsoft Entra ID can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed. */
        public ?CustomExtensionClientConfiguration $clientConfiguration = null,
        /** Description for the customCalloutExtension object. */
        public ?string $description = null,
        /** Display name for the customCalloutExtension object. */
        public ?string $displayName = null,
        /** The type and details for configuring the endpoint to call the logic app's workflow. */
        public ?CustomExtensionEndpointConfiguration $endpointConfiguration = null,
        /** The behaviour on error for the custom authentication extension. */
        public ?CustomExtensionBehaviorOnError $behaviorOnError = null,
        /** Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional. */
        public array $claimsForTokenConfiguration = []
    ) {}
}
