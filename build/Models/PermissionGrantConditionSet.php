<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantConditionSet
 */
class PermissionGrantConditionSet
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all. */
        public array $clientApplicationIds = [],
        /** @var string[] A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all. */
        public array $clientApplicationPublisherIds = [],
        /** Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it doesn't have a verified publisher. Default is false. */
        public ?bool $clientApplicationsFromVerifiedPublisherOnly = null,
        /** @var string[] A list of Microsoft Entra tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all. */
        public array $clientApplicationTenantIds = [],
        /** The permission classification for the permission being granted, or all to match with any permission classification (including permissions that aren't classified). Default is all. */
        public ?string $permissionClassification = null,
        /** @var string[] The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API's servicePrincipal object. The id of application permissions can be found in the appRoles property of the API's servicePrincipal object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's servicePrincipal object. Default is the single value all. */
        public array $permissions = [],
        /** The permission type of the permission being granted. Possible values: application for application permissions (for example app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions that haven't been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but can't be used in custom permission grant policies. Required. */
        public ?PermissionType $permissionType = null,
        /** The appId of the resource application (for example the API) for which a permission is being granted, or any to match with any resource application or API. Default is any. */
        public ?string $resourceApplication = null
    ) {}
}
