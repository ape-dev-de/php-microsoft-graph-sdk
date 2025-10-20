<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantConditionSet
 */
class PermissionGrantConditionSet
{
    /**
     * A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
     */
    private ?string $clientApplicationIds;

    /**
     * A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     */
    private ?string $clientApplicationPublisherIds;

    /**
     * Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it doesn''t have a verified publisher. Default is false.
     */
    private ?bool $clientApplicationsFromVerifiedPublisherOnly;

    /**
     * A list of Microsoft Entra tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     */
    private ?string $clientApplicationTenantIds;

    /**
     * The permission classification for the permission being granted, or all to match with any permission classification (including permissions that aren''t classified). Default is all.
     */
    private ?string $permissionClassification;

    /**
     * The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API''s servicePrincipal object. The id of application permissions can be found in the appRoles property of the API''s servicePrincipal object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API''s servicePrincipal object. Default is the single value all.
     */
    private ?string $permissions;

    /**
     * The permission type of the permission being granted. Possible values: application for application permissions (for example app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions that haven''t been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but can''t be used in custom permission grant policies. Required.
     */
    private ?string $permissionType;

    /**
     * The appId of the resource application (for example the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     */
    private ?string $resourceApplication;

    public function getClientApplicationIds(): ?string
    {
        return $this->clientApplicationIds;
    }

    public function setClientApplicationIds(?string $clientApplicationIds): self
    {
        $this->clientApplicationIds = $clientApplicationIds;
        return $this;
    }

    public function getClientApplicationPublisherIds(): ?string
    {
        return $this->clientApplicationPublisherIds;
    }

    public function setClientApplicationPublisherIds(?string $clientApplicationPublisherIds): self
    {
        $this->clientApplicationPublisherIds = $clientApplicationPublisherIds;
        return $this;
    }

    public function getClientApplicationsFromVerifiedPublisherOnly(): ?bool
    {
        return $this->clientApplicationsFromVerifiedPublisherOnly;
    }

    public function setClientApplicationsFromVerifiedPublisherOnly(?bool $clientApplicationsFromVerifiedPublisherOnly): self
    {
        $this->clientApplicationsFromVerifiedPublisherOnly = $clientApplicationsFromVerifiedPublisherOnly;
        return $this;
    }

    public function getClientApplicationTenantIds(): ?string
    {
        return $this->clientApplicationTenantIds;
    }

    public function setClientApplicationTenantIds(?string $clientApplicationTenantIds): self
    {
        $this->clientApplicationTenantIds = $clientApplicationTenantIds;
        return $this;
    }

    public function getPermissionClassification(): ?string
    {
        return $this->permissionClassification;
    }

    public function setPermissionClassification(?string $permissionClassification): self
    {
        $this->permissionClassification = $permissionClassification;
        return $this;
    }

    public function getPermissions(): ?string
    {
        return $this->permissions;
    }

    public function setPermissions(?string $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getPermissionType(): ?string
    {
        return $this->permissionType;
    }

    public function setPermissionType(?string $permissionType): self
    {
        $this->permissionType = $permissionType;
        return $this;
    }

    public function getResourceApplication(): ?string
    {
        return $this->resourceApplication;
    }

    public function setResourceApplication(?string $resourceApplication): self
    {
        $this->resourceApplication = $resourceApplication;
        return $this;
    }

}
