<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuth2PermissionGrant
 */
class OAuth2PermissionGrant
{
    public function __construct(
        /** The object id (not appId) of the client service principal for the application that's authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only). */
        public ?string $clientId = null,
        /** Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Nonadmin users might be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only). */
        public ?string $consentType = null,
        /** The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only). */
        public ?string $principalId = null,
        /** The id of the resource service principal to which access is authorized. This identifies the API that the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only). */
        public ?string $resourceId = null,
        /** A space-separated list of the claim values for delegated permissions that should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the oauth2PermissionScopes property of the resource service principal. Must not exceed 3,850 characters in length. */
        public ?string $scope = null
    ) {}
}
