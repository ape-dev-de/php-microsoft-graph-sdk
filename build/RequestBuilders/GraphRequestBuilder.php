<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\AdminRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Agreements\AgreementsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppCatalogs\AppCatalogsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\ApplicationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\AuditLogsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Chats\ChatsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CommunicationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Compliance\ComplianceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Connections\ConnectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\ContactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contracts\ContractsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Copilot\CopilotRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceManagementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\DevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\DirectoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DirectoryObjects\DirectoryObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DirectoryRoles\DirectoryRolesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\DomainsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\DrivesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\EducationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\EmployeeExperienceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\ExternalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FilterOperators\FilterOperatorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Functions\FunctionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GroupSettingTemplatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettings\GroupSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\GroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\IdentityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\IdentityProtectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProviders\IdentityProvidersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\InformationProtectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Invitations\InvitationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\OrganizationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Places\PlacesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\PlannerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\PoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\PrivacyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\ReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\RoleManagementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SchemaExtensions\SchemaExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search\SearchRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\SecurityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipalsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\SharesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\SitesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\SolutionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\StorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubscribedSkus\SubscribedSkusRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Subscriptions\SubscriptionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\TeamsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TeamsTemplates\TeamsTemplatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\TeamworkRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\TenantRelationshipsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\UsersRequestBuilder;

class GraphRequestBuilder extends BaseRequestBuilder
{
    public function __construct(GraphClient $client)
    {
        parent::__construct($client, '');
    }

    public function admin(): AdminRequestBuilder
    {
        return new AdminRequestBuilder($this->client, '/admin');
    }

    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder
    {
        return new AgreementAcceptancesRequestBuilder($this->client, '/agreementacceptances');
    }

    public function agreements(): AgreementsRequestBuilder
    {
        return new AgreementsRequestBuilder($this->client, '/agreements');
    }

    public function appCatalogs(): AppCatalogsRequestBuilder
    {
        return new AppCatalogsRequestBuilder($this->client, '/appcatalogs');
    }

    public function applicationTemplates(): ApplicationTemplatesRequestBuilder
    {
        return new ApplicationTemplatesRequestBuilder($this->client, '/applicationtemplates');
    }

    public function applications(): ApplicationsRequestBuilder
    {
        return new ApplicationsRequestBuilder($this->client, '/applications');
    }

    public function auditLogs(): AuditLogsRequestBuilder
    {
        return new AuditLogsRequestBuilder($this->client, '/auditlogs');
    }

    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder
    {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->client, '/authenticationmethodconfigurations');
    }

    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder
    {
        return new AuthenticationMethodsPolicyRequestBuilder($this->client, '/authenticationmethodspolicy');
    }

    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder
    {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->client, '/certificatebasedauthconfiguration');
    }

    public function chats(): ChatsRequestBuilder
    {
        return new ChatsRequestBuilder($this->client, '/chats');
    }

    public function communications(): CommunicationsRequestBuilder
    {
        return new CommunicationsRequestBuilder($this->client, '/communications');
    }

    public function compliance(): ComplianceRequestBuilder
    {
        return new ComplianceRequestBuilder($this->client, '/compliance');
    }

    public function connections(): ConnectionsRequestBuilder
    {
        return new ConnectionsRequestBuilder($this->client, '/connections');
    }

    public function contacts(): ContactsRequestBuilder
    {
        return new ContactsRequestBuilder($this->client, '/contacts');
    }

    public function contracts(): ContractsRequestBuilder
    {
        return new ContractsRequestBuilder($this->client, '/contracts');
    }

    public function copilot(): CopilotRequestBuilder
    {
        return new CopilotRequestBuilder($this->client, '/copilot');
    }

    public function dataPolicyOperations(): DataPolicyOperationsRequestBuilder
    {
        return new DataPolicyOperationsRequestBuilder($this->client, '/datapolicyoperations');
    }

    public function deviceAppManagement(): DeviceAppManagementRequestBuilder
    {
        return new DeviceAppManagementRequestBuilder($this->client, '/deviceappmanagement');
    }

    public function deviceManagement(): DeviceManagementRequestBuilder
    {
        return new DeviceManagementRequestBuilder($this->client, '/devicemanagement');
    }

    public function devices(): DevicesRequestBuilder
    {
        return new DevicesRequestBuilder($this->client, '/devices');
    }

    public function directory(): DirectoryRequestBuilder
    {
        return new DirectoryRequestBuilder($this->client, '/directory');
    }

    public function directoryObjects(): DirectoryObjectsRequestBuilder
    {
        return new DirectoryObjectsRequestBuilder($this->client, '/directoryobjects');
    }

    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder
    {
        return new DirectoryRoleTemplatesRequestBuilder($this->client, '/directoryroletemplates');
    }

    public function directoryRoles(): DirectoryRolesRequestBuilder
    {
        return new DirectoryRolesRequestBuilder($this->client, '/directoryroles');
    }

    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder
    {
        return new DomainDnsRecordsRequestBuilder($this->client, '/domaindnsrecords');
    }

    public function domains(): DomainsRequestBuilder
    {
        return new DomainsRequestBuilder($this->client, '/domains');
    }

    public function drives(): DrivesRequestBuilder
    {
        return new DrivesRequestBuilder($this->client, '/drives');
    }

    public function education(): EducationRequestBuilder
    {
        return new EducationRequestBuilder($this->client, '/education');
    }

    public function employeeExperience(): EmployeeExperienceRequestBuilder
    {
        return new EmployeeExperienceRequestBuilder($this->client, '/employeeexperience');
    }

    public function external(): ExternalRequestBuilder
    {
        return new ExternalRequestBuilder($this->client, '/external');
    }

    public function filterOperators(): FilterOperatorsRequestBuilder
    {
        return new FilterOperatorsRequestBuilder($this->client, '/filteroperators');
    }

    public function functions(): FunctionsRequestBuilder
    {
        return new FunctionsRequestBuilder($this->client, '/functions');
    }

    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder
    {
        return new GroupLifecyclePoliciesRequestBuilder($this->client, '/grouplifecyclepolicies');
    }

    public function groupSettingTemplates(): GroupSettingTemplatesRequestBuilder
    {
        return new GroupSettingTemplatesRequestBuilder($this->client, '/groupsettingtemplates');
    }

    public function groupSettings(): GroupSettingsRequestBuilder
    {
        return new GroupSettingsRequestBuilder($this->client, '/groupsettings');
    }

    public function groups(): GroupsRequestBuilder
    {
        return new GroupsRequestBuilder($this->client, '/groups');
    }

    public function identity(): IdentityRequestBuilder
    {
        return new IdentityRequestBuilder($this->client, '/identity');
    }

    public function identityGovernance(): IdentityGovernanceRequestBuilder
    {
        return new IdentityGovernanceRequestBuilder($this->client, '/identitygovernance');
    }

    public function identityProtection(): IdentityProtectionRequestBuilder
    {
        return new IdentityProtectionRequestBuilder($this->client, '/identityprotection');
    }

    public function identityProviders(): IdentityProvidersRequestBuilder
    {
        return new IdentityProvidersRequestBuilder($this->client, '/identityproviders');
    }

    public function informationProtection(): InformationProtectionRequestBuilder
    {
        return new InformationProtectionRequestBuilder($this->client, '/informationprotection');
    }

    public function invitations(): InvitationsRequestBuilder
    {
        return new InvitationsRequestBuilder($this->client, '/invitations');
    }

    public function me(): MeRequestBuilder
    {
        return new MeRequestBuilder($this->client, '/me');
    }

    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder
    {
        return new Oauth2PermissionGrantsRequestBuilder($this->client, '/oauth2permissiongrants');
    }

    public function organization(): OrganizationRequestBuilder
    {
        return new OrganizationRequestBuilder($this->client, '/organization');
    }

    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, '/permissiongrants');
    }

    public function places(): PlacesRequestBuilder
    {
        return new PlacesRequestBuilder($this->client, '/places');
    }

    public function planner(): PlannerRequestBuilder
    {
        return new PlannerRequestBuilder($this->client, '/planner');
    }

    public function policies(): PoliciesRequestBuilder
    {
        return new PoliciesRequestBuilder($this->client, '/policies');
    }

    public function privacy(): PrivacyRequestBuilder
    {
        return new PrivacyRequestBuilder($this->client, '/privacy');
    }

    public function reports(): ReportsRequestBuilder
    {
        return new ReportsRequestBuilder($this->client, '/reports');
    }

    public function roleManagement(): RoleManagementRequestBuilder
    {
        return new RoleManagementRequestBuilder($this->client, '/rolemanagement');
    }

    public function schemaExtensions(): SchemaExtensionsRequestBuilder
    {
        return new SchemaExtensionsRequestBuilder($this->client, '/schemaextensions');
    }

    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder
    {
        return new ScopedRoleMembershipsRequestBuilder($this->client, '/scopedrolememberships');
    }

    public function search(): SearchRequestBuilder
    {
        return new SearchRequestBuilder($this->client, '/search');
    }

    public function security(): SecurityRequestBuilder
    {
        return new SecurityRequestBuilder($this->client, '/security');
    }

    public function servicePrincipals(): ServicePrincipalsRequestBuilder
    {
        return new ServicePrincipalsRequestBuilder($this->client, '/serviceprincipals');
    }

    public function shares(): SharesRequestBuilder
    {
        return new SharesRequestBuilder($this->client, '/shares');
    }

    public function sites(): SitesRequestBuilder
    {
        return new SitesRequestBuilder($this->client, '/sites');
    }

    public function solutions(): SolutionsRequestBuilder
    {
        return new SolutionsRequestBuilder($this->client, '/solutions');
    }

    public function storage(): StorageRequestBuilder
    {
        return new StorageRequestBuilder($this->client, '/storage');
    }

    public function subscribedSkus(): SubscribedSkusRequestBuilder
    {
        return new SubscribedSkusRequestBuilder($this->client, '/subscribedskus');
    }

    public function subscriptions(): SubscriptionsRequestBuilder
    {
        return new SubscriptionsRequestBuilder($this->client, '/subscriptions');
    }

    public function teams(): TeamsRequestBuilder
    {
        return new TeamsRequestBuilder($this->client, '/teams');
    }

    public function teamsTemplates(): TeamsTemplatesRequestBuilder
    {
        return new TeamsTemplatesRequestBuilder($this->client, '/teamstemplates');
    }

    public function teamwork(): TeamworkRequestBuilder
    {
        return new TeamworkRequestBuilder($this->client, '/teamwork');
    }

    public function tenantRelationships(): TenantRelationshipsRequestBuilder
    {
        return new TenantRelationshipsRequestBuilder($this->client, '/tenantrelationships');
    }

    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, '/users');
    }

}
