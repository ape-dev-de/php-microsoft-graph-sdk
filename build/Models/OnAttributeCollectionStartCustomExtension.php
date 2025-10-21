<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionStartCustomExtension
 */
class OnAttributeCollectionStartCustomExtension
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow. */
        public ?string $authenticationConfiguration = null,
        /** HTTP connection settings that define how long Microsoft Entra ID can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed. */
        public ?string $clientConfiguration = null,
        /** Description for the customCalloutExtension object. */
        public ?string $description = null,
        /** Display name for the customCalloutExtension object. */
        public ?string $displayName = null,
        /** The type and details for configuring the endpoint to call the logic app's workflow. */
        public ?string $endpointConfiguration = null,
        /** The behaviour on error for the custom authentication extension. */
        public ?string $behaviorOnError = null
    ) {}
}
