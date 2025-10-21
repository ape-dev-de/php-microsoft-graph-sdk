<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuth2PermissionGrant
 */
class OAuth2PermissionGrant
{
    /**
     * The object id (not appId) of the client service principal for the application that's authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
     */
    private ?string $clientId;

    /**
     * Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Nonadmin users might be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
     */
    private ?string $consentType;

    /**
     * The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
     */
    private ?string $principalId;

    /**
     * The id of the resource service principal to which access is authorized. This identifies the API that the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
     */
    private ?string $resourceId;

    /**
     * A space-separated list of the claim values for delegated permissions that should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the oauth2PermissionScopes property of the resource service principal. Must not exceed 3,850 characters in length.
     */
    private ?string $scope;


    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getConsentType(): ?string
    {
        return $this->consentType;
    }

    public function setConsentType(?string $consentType): self
    {
        $this->consentType = $consentType;
        return $this;
    }

    public function getPrincipalId(): ?string
    {
        return $this->principalId;
    }

    public function setPrincipalId(?string $principalId): self
    {
        $this->principalId = $principalId;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

}
