<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

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
        return new AgreementAcceptancesRequestBuilder($this->client, '/agreementAcceptances');
    }

    public function agreements(): AgreementsRequestBuilder
    {
        return new AgreementsRequestBuilder($this->client, '/agreements');
    }

    public function appCatalogs(): AppCatalogsRequestBuilder
    {
        return new AppCatalogsRequestBuilder($this->client, '/appCatalogs');
    }

    public function applicationTemplates(): ApplicationTemplatesRequestBuilder
    {
        return new ApplicationTemplatesRequestBuilder($this->client, '/applicationTemplates');
    }

    public function applications(): ApplicationsRequestBuilder
    {
        return new ApplicationsRequestBuilder($this->client, '/applications');
    }

    public function auditLogs(): AuditLogsRequestBuilder
    {
        return new AuditLogsRequestBuilder($this->client, '/auditLogs');
    }

    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder
    {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->client, '/authenticationMethodConfigurations');
    }

    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder
    {
        return new AuthenticationMethodsPolicyRequestBuilder($this->client, '/authenticationMethodsPolicy');
    }

    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder
    {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->client, '/certificateBasedAuthConfiguration');
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
        return new DataPolicyOperationsRequestBuilder($this->client, '/dataPolicyOperations');
    }

    public function deviceAppManagement(): DeviceAppManagementRequestBuilder
    {
        return new DeviceAppManagementRequestBuilder($this->client, '/deviceAppManagement');
    }

    public function deviceManagement(): DeviceManagementRequestBuilder
    {
        return new DeviceManagementRequestBuilder($this->client, '/deviceManagement');
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
        return new DirectoryObjectsRequestBuilder($this->client, '/directoryObjects');
    }

    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder
    {
        return new DirectoryRoleTemplatesRequestBuilder($this->client, '/directoryRoleTemplates');
    }

    public function directoryRoles(): DirectoryRolesRequestBuilder
    {
        return new DirectoryRolesRequestBuilder($this->client, '/directoryRoles');
    }

    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder
    {
        return new DomainDnsRecordsRequestBuilder($this->client, '/domainDnsRecords');
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
        return new EmployeeExperienceRequestBuilder($this->client, '/employeeExperience');
    }

    public function external(): ExternalRequestBuilder
    {
        return new ExternalRequestBuilder($this->client, '/external');
    }

    public function filterOperators(): FilterOperatorsRequestBuilder
    {
        return new FilterOperatorsRequestBuilder($this->client, '/filterOperators');
    }

    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder
    {
        return new GroupLifecyclePoliciesRequestBuilder($this->client, '/groupLifecyclePolicies');
    }

    public function groupSettingTemplates(): GroupSettingTemplatesRequestBuilder
    {
        return new GroupSettingTemplatesRequestBuilder($this->client, '/groupSettingTemplates');
    }

    public function groupSettings(): GroupSettingsRequestBuilder
    {
        return new GroupSettingsRequestBuilder($this->client, '/groupSettings');
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
        return new IdentityGovernanceRequestBuilder($this->client, '/identityGovernance');
    }

    public function identityProtection(): IdentityProtectionRequestBuilder
    {
        return new IdentityProtectionRequestBuilder($this->client, '/identityProtection');
    }

    public function identityProviders(): IdentityProvidersRequestBuilder
    {
        return new IdentityProvidersRequestBuilder($this->client, '/identityProviders');
    }

    public function informationProtection(): InformationProtectionRequestBuilder
    {
        return new InformationProtectionRequestBuilder($this->client, '/informationProtection');
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
        return new Oauth2PermissionGrantsRequestBuilder($this->client, '/oauth2PermissionGrants');
    }

    public function organization(): OrganizationRequestBuilder
    {
        return new OrganizationRequestBuilder($this->client, '/organization');
    }

    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, '/permissionGrants');
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

    public function print(): PrintRequestBuilder
    {
        return new PrintRequestBuilder($this->client, '/print');
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
        return new RoleManagementRequestBuilder($this->client, '/roleManagement');
    }

    public function schemaExtensions(): SchemaExtensionsRequestBuilder
    {
        return new SchemaExtensionsRequestBuilder($this->client, '/schemaExtensions');
    }

    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder
    {
        return new ScopedRoleMembershipsRequestBuilder($this->client, '/scopedRoleMemberships');
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
        return new ServicePrincipalsRequestBuilder($this->client, '/servicePrincipals');
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
        return new SubscribedSkusRequestBuilder($this->client, '/subscribedSkus');
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
        return new TeamsTemplatesRequestBuilder($this->client, '/teamsTemplates');
    }

    public function teamwork(): TeamworkRequestBuilder
    {
        return new TeamworkRequestBuilder($this->client, '/teamwork');
    }

    public function tenantRelationships(): TenantRelationshipsRequestBuilder
    {
        return new TenantRelationshipsRequestBuilder($this->client, '/tenantRelationships');
    }

    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, '/users');
    }

}
