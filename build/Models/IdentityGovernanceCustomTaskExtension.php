<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtension
 */
class IdentityGovernanceCustomTaskExtension
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
        /** The callback configuration for a custom task extension. */
        public ?string $callbackConfiguration = null,
        /** When the custom task extension was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** When the custom extension was last modified.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The unique identifier of the Microsoft Entra user that created the custom task extension.Supports $filter(eq, ne) and $expand. */
        public ?string $createdBy = null,
        /** The unique identifier of the Microsoft Entra user that modified the custom task extension last.Supports $filter(eq, ne) and $expand. */
        public ?string $lastModifiedBy = null
    ) {}
}
