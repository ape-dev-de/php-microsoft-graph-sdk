<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FederatedIdentityCredential
 */
class FederatedIdentityCredential
{
    public function __construct(
        /** @var string[] The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Microsoft Entra ID. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Microsoft Entra ID in your external identity provider and has no fixed value across identity providers - you might need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required. */
        public array $audiences = [],
        /** The unvalidated description of the federated identity credential, provided by the user. It has a limit of 600 characters. Optional. */
        public ?string $description = null,
        /** The URL of the external identity provider, which must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique within the app. It has a limit of 600 characters. Required. */
        public ?string $issuer = null,
        /** The unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. The string is immutable after it''s created. Alternate key. Required. Not nullable. Supports $filter (eq). */
        public ?string $name = null,
        /** Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format; each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Microsoft Entra ID. The combination of issuer and subject must be unique within the app. It has a limit of 600 characters. Supports $filter (eq). */
        public ?string $subject = null
    ) {}
}
