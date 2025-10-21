<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\User;

/**
 * Request builder for individual User item
 */
class UserItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get User item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return User
     */
    public function get(?array $queryParameters = null): User
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, User::class);
    }

    /**
     * Update User item
     *
     * @param User $item The item with updated properties
     * @return User
     */
    public function patch(User $item): User
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, User::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

    /**
     * Get activities request builder
     *
     * @return ActivitiesRequestBuilder
     */
    public function activities(): ActivitiesRequestBuilder
    {
        return new ActivitiesRequestBuilder($this->client, $this->buildPath('activities'));
    }

    /**
     * Get agreementAcceptances request builder
     *
     * @return AgreementAcceptancesRequestBuilder
     */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder
    {
        return new AgreementAcceptancesRequestBuilder($this->client, $this->buildPath('agreementAcceptances'));
    }

    /**
     * Get appRoleAssignments request builder
     *
     * @return AppRoleAssignmentsRequestBuilder
     */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder
    {
        return new AppRoleAssignmentsRequestBuilder($this->client, $this->buildPath('appRoleAssignments'));
    }

    /**
     * Get authentication request builder
     *
     * @return AuthenticationRequestBuilder
     */
    public function authentication(): AuthenticationRequestBuilder
    {
        return new AuthenticationRequestBuilder($this->client, $this->buildPath('authentication'));
    }

    /**
     * Get calendar request builder
     *
     * @return CalendarRequestBuilder
     */
    public function calendar(): CalendarRequestBuilder
    {
        return new CalendarRequestBuilder($this->client, $this->buildPath('calendar'));
    }

    /**
     * Get calendarGroups request builder
     *
     * @return CalendarGroupsRequestBuilder
     */
    public function calendarGroups(): CalendarGroupsRequestBuilder
    {
        return new CalendarGroupsRequestBuilder($this->client, $this->buildPath('calendarGroups'));
    }

    /**
     * Get calendars request builder
     *
     * @return CalendarsRequestBuilder
     */
    public function calendars(): CalendarsRequestBuilder
    {
        return new CalendarsRequestBuilder($this->client, $this->buildPath('calendars'));
    }

    /**
     * Get calendarView request builder
     *
     * @return CalendarViewRequestBuilder
     */
    public function calendarView(): CalendarViewRequestBuilder
    {
        return new CalendarViewRequestBuilder($this->client, $this->buildPath('calendarView'));
    }

    /**
     * Get chats request builder
     *
     * @return ChatsRequestBuilder
     */
    public function chats(): ChatsRequestBuilder
    {
        return new ChatsRequestBuilder($this->client, $this->buildPath('chats'));
    }

    /**
     * Get cloudClipboard request builder
     *
     * @return CloudClipboardRequestBuilder
     */
    public function cloudClipboard(): CloudClipboardRequestBuilder
    {
        return new CloudClipboardRequestBuilder($this->client, $this->buildPath('cloudClipboard'));
    }

    /**
     * Get contactFolders request builder
     *
     * @return ContactFoldersRequestBuilder
     */
    public function contactFolders(): ContactFoldersRequestBuilder
    {
        return new ContactFoldersRequestBuilder($this->client, $this->buildPath('contactFolders'));
    }

    /**
     * Get contacts request builder
     *
     * @return ContactsRequestBuilder
     */
    public function contacts(): ContactsRequestBuilder
    {
        return new ContactsRequestBuilder($this->client, $this->buildPath('contacts'));
    }

    /**
     * Get createdObjects request builder
     *
     * @return CreatedObjectsRequestBuilder
     */
    public function createdObjects(): CreatedObjectsRequestBuilder
    {
        return new CreatedObjectsRequestBuilder($this->client, $this->buildPath('createdObjects'));
    }

    /**
     * Get dataSecurityAndGovernance request builder
     *
     * @return DataSecurityAndGovernanceRequestBuilder
     */
    public function dataSecurityAndGovernance(): DataSecurityAndGovernanceRequestBuilder
    {
        return new DataSecurityAndGovernanceRequestBuilder($this->client, $this->buildPath('dataSecurityAndGovernance'));
    }

    /**
     * Get deviceManagementTroubleshootingEvents request builder
     *
     * @return DeviceManagementTroubleshootingEventsRequestBuilder
     */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder
    {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->client, $this->buildPath('deviceManagementTroubleshootingEvents'));
    }

    /**
     * Get directReports request builder
     *
     * @return DirectReportsRequestBuilder
     */
    public function directReports(): DirectReportsRequestBuilder
    {
        return new DirectReportsRequestBuilder($this->client, $this->buildPath('directReports'));
    }

    /**
     * Get drive request builder
     *
     * @return DriveRequestBuilder
     */
    public function drive(): DriveRequestBuilder
    {
        return new DriveRequestBuilder($this->client, $this->buildPath('drive'));
    }

    /**
     * Get drives request builder
     *
     * @return DrivesRequestBuilder
     */
    public function drives(): DrivesRequestBuilder
    {
        return new DrivesRequestBuilder($this->client, $this->buildPath('drives'));
    }

    /**
     * Get employeeExperience request builder
     *
     * @return EmployeeExperienceRequestBuilder
     */
    public function employeeExperience(): EmployeeExperienceRequestBuilder
    {
        return new EmployeeExperienceRequestBuilder($this->client, $this->buildPath('employeeExperience'));
    }

    /**
     * Get events request builder
     *
     * @return EventsRequestBuilder
     */
    public function events(): EventsRequestBuilder
    {
        return new EventsRequestBuilder($this->client, $this->buildPath('events'));
    }

    /**
     * Get extensions request builder
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->buildPath('extensions'));
    }

    /**
     * Get followedSites request builder
     *
     * @return FollowedSitesRequestBuilder
     */
    public function followedSites(): FollowedSitesRequestBuilder
    {
        return new FollowedSitesRequestBuilder($this->client, $this->buildPath('followedSites'));
    }

    /**
     * Get inferenceClassification request builder
     *
     * @return InferenceClassificationRequestBuilder
     */
    public function inferenceClassification(): InferenceClassificationRequestBuilder
    {
        return new InferenceClassificationRequestBuilder($this->client, $this->buildPath('inferenceClassification'));
    }

    /**
     * Get insights request builder
     *
     * @return InsightsRequestBuilder
     */
    public function insights(): InsightsRequestBuilder
    {
        return new InsightsRequestBuilder($this->client, $this->buildPath('insights'));
    }

    /**
     * Get joinedTeams request builder
     *
     * @return JoinedTeamsRequestBuilder
     */
    public function joinedTeams(): JoinedTeamsRequestBuilder
    {
        return new JoinedTeamsRequestBuilder($this->client, $this->buildPath('joinedTeams'));
    }

    /**
     * Get licenseDetails request builder
     *
     * @return LicenseDetailsRequestBuilder
     */
    public function licenseDetails(): LicenseDetailsRequestBuilder
    {
        return new LicenseDetailsRequestBuilder($this->client, $this->buildPath('licenseDetails'));
    }

    /**
     * Get mailboxSettings request builder
     *
     * @return MailboxSettingsRequestBuilder
     */
    public function mailboxSettings(): MailboxSettingsRequestBuilder
    {
        return new MailboxSettingsRequestBuilder($this->client, $this->buildPath('mailboxSettings'));
    }

    /**
     * Get mailFolders request builder
     *
     * @return MailFoldersRequestBuilder
     */
    public function mailFolders(): MailFoldersRequestBuilder
    {
        return new MailFoldersRequestBuilder($this->client, $this->buildPath('mailFolders'));
    }

    /**
     * Get managedAppRegistrations request builder
     *
     * @return ManagedAppRegistrationsRequestBuilder
     */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder
    {
        return new ManagedAppRegistrationsRequestBuilder($this->client, $this->buildPath('managedAppRegistrations'));
    }

    /**
     * Get managedDevices request builder
     *
     * @return ManagedDevicesRequestBuilder
     */
    public function managedDevices(): ManagedDevicesRequestBuilder
    {
        return new ManagedDevicesRequestBuilder($this->client, $this->buildPath('managedDevices'));
    }

    /**
     * Get manager request builder
     *
     * @return ManagerRequestBuilder
     */
    public function manager(): ManagerRequestBuilder
    {
        return new ManagerRequestBuilder($this->client, $this->buildPath('manager'));
    }

    /**
     * Get memberOf request builder
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->buildPath('memberOf'));
    }

    /**
     * Get messages request builder
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->buildPath('messages'));
    }

    /**
     * Get assignLicense request builder
     *
     * @return AssignLicenseRequestBuilder
     */
    public function assignLicense(): AssignLicenseRequestBuilder
    {
        return new AssignLicenseRequestBuilder($this->client, $this->buildPath('assignLicense'));
    }

    /**
     * Get changePassword request builder
     *
     * @return ChangePasswordRequestBuilder
     */
    public function changePassword(): ChangePasswordRequestBuilder
    {
        return new ChangePasswordRequestBuilder($this->client, $this->buildPath('changePassword'));
    }

    /**
     * Get checkMemberGroups request builder
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->buildPath('checkMemberGroups'));
    }

    /**
     * Get checkMemberObjects request builder
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->buildPath('checkMemberObjects'));
    }

    /**
     * Get exportPersonalData request builder
     *
     * @return ExportPersonalDataRequestBuilder
     */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder
    {
        return new ExportPersonalDataRequestBuilder($this->client, $this->buildPath('exportPersonalData'));
    }

    /**
     * Get findMeetingTimes request builder
     *
     * @return FindMeetingTimesRequestBuilder
     */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder
    {
        return new FindMeetingTimesRequestBuilder($this->client, $this->buildPath('findMeetingTimes'));
    }

    /**
     * Get getMailTips request builder
     *
     * @return GetMailTipsRequestBuilder
     */
    public function getMailTips(): GetMailTipsRequestBuilder
    {
        return new GetMailTipsRequestBuilder($this->client, $this->buildPath('getMailTips'));
    }

    /**
     * Get getMemberGroups request builder
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->buildPath('getMemberGroups'));
    }

    /**
     * Get getMemberObjects request builder
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->buildPath('getMemberObjects'));
    }

    /**
     * Get removeAllDevicesFromManagement request builder
     *
     * @return RemoveAllDevicesFromManagementRequestBuilder
     */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder
    {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->client, $this->buildPath('removeAllDevicesFromManagement'));
    }

    /**
     * Get reprocessLicenseAssignment request builder
     *
     * @return ReprocessLicenseAssignmentRequestBuilder
     */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder
    {
        return new ReprocessLicenseAssignmentRequestBuilder($this->client, $this->buildPath('reprocessLicenseAssignment'));
    }

    /**
     * Get restore request builder
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->buildPath('restore'));
    }

    /**
     * Get retryServiceProvisioning request builder
     *
     * @return RetryServiceProvisioningRequestBuilder
     */
    public function retryServiceProvisioning(): RetryServiceProvisioningRequestBuilder
    {
        return new RetryServiceProvisioningRequestBuilder($this->client, $this->buildPath('retryServiceProvisioning'));
    }

    /**
     * Get revokeSignInSessions request builder
     *
     * @return RevokeSignInSessionsRequestBuilder
     */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder
    {
        return new RevokeSignInSessionsRequestBuilder($this->client, $this->buildPath('revokeSignInSessions'));
    }

    /**
     * Get sendMail request builder
     *
     * @return SendMailRequestBuilder
     */
    public function sendMail(): SendMailRequestBuilder
    {
        return new SendMailRequestBuilder($this->client, $this->buildPath('sendMail'));
    }

    /**
     * Get translateExchangeIds request builder
     *
     * @return TranslateExchangeIdsRequestBuilder
     */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder
    {
        return new TranslateExchangeIdsRequestBuilder($this->client, $this->buildPath('translateExchangeIds'));
    }

    /**
     * Get wipeManagedAppRegistrationsByDeviceTag request builder
     *
     * @return WipeManagedAppRegistrationsByDeviceTagRequestBuilder
     */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder
    {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->client, $this->buildPath('wipeManagedAppRegistrationsByDeviceTag'));
    }

    /**
     * Get oauth2PermissionGrants request builder
     *
     * @return Oauth2PermissionGrantsRequestBuilder
     */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder
    {
        return new Oauth2PermissionGrantsRequestBuilder($this->client, $this->buildPath('oauth2PermissionGrants'));
    }

    /**
     * Get onenote request builder
     *
     * @return OnenoteRequestBuilder
     */
    public function onenote(): OnenoteRequestBuilder
    {
        return new OnenoteRequestBuilder($this->client, $this->buildPath('onenote'));
    }

    /**
     * Get onlineMeetings request builder
     *
     * @return OnlineMeetingsRequestBuilder
     */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder
    {
        return new OnlineMeetingsRequestBuilder($this->client, $this->buildPath('onlineMeetings'));
    }

    /**
     * Get outlook request builder
     *
     * @return OutlookRequestBuilder
     */
    public function outlook(): OutlookRequestBuilder
    {
        return new OutlookRequestBuilder($this->client, $this->buildPath('outlook'));
    }

    /**
     * Get ownedDevices request builder
     *
     * @return OwnedDevicesRequestBuilder
     */
    public function ownedDevices(): OwnedDevicesRequestBuilder
    {
        return new OwnedDevicesRequestBuilder($this->client, $this->buildPath('ownedDevices'));
    }

    /**
     * Get ownedObjects request builder
     *
     * @return OwnedObjectsRequestBuilder
     */
    public function ownedObjects(): OwnedObjectsRequestBuilder
    {
        return new OwnedObjectsRequestBuilder($this->client, $this->buildPath('ownedObjects'));
    }

    /**
     * Get people request builder
     *
     * @return PeopleRequestBuilder
     */
    public function people(): PeopleRequestBuilder
    {
        return new PeopleRequestBuilder($this->client, $this->buildPath('people'));
    }

    /**
     * Get permissionGrants request builder
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->buildPath('permissionGrants'));
    }

    /**
     * Get photo request builder
     *
     * @return PhotoRequestBuilder
     */
    public function photo(): PhotoRequestBuilder
    {
        return new PhotoRequestBuilder($this->client, $this->buildPath('photo'));
    }

    /**
     * Get photos request builder
     *
     * @return PhotosRequestBuilder
     */
    public function photos(): PhotosRequestBuilder
    {
        return new PhotosRequestBuilder($this->client, $this->buildPath('photos'));
    }

    /**
     * Get planner request builder
     *
     * @return PlannerRequestBuilder
     */
    public function planner(): PlannerRequestBuilder
    {
        return new PlannerRequestBuilder($this->client, $this->buildPath('planner'));
    }

    /**
     * Get presence request builder
     *
     * @return PresenceRequestBuilder
     */
    public function presence(): PresenceRequestBuilder
    {
        return new PresenceRequestBuilder($this->client, $this->buildPath('presence'));
    }

    /**
     * Get registeredDevices request builder
     *
     * @return RegisteredDevicesRequestBuilder
     */
    public function registeredDevices(): RegisteredDevicesRequestBuilder
    {
        return new RegisteredDevicesRequestBuilder($this->client, $this->buildPath('registeredDevices'));
    }

    /**
     * Get scopedRoleMemberOf request builder
     *
     * @return ScopedRoleMemberOfRequestBuilder
     */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder
    {
        return new ScopedRoleMemberOfRequestBuilder($this->client, $this->buildPath('scopedRoleMemberOf'));
    }

    /**
     * Get serviceProvisioningErrors request builder
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->buildPath('serviceProvisioningErrors'));
    }

    /**
     * Get settings request builder
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->buildPath('settings'));
    }

    /**
     * Get solutions request builder
     *
     * @return SolutionsRequestBuilder
     */
    public function solutions(): SolutionsRequestBuilder
    {
        return new SolutionsRequestBuilder($this->client, $this->buildPath('solutions'));
    }

    /**
     * Get sponsors request builder
     *
     * @return SponsorsRequestBuilder
     */
    public function sponsors(): SponsorsRequestBuilder
    {
        return new SponsorsRequestBuilder($this->client, $this->buildPath('sponsors'));
    }

    /**
     * Get teamwork request builder
     *
     * @return TeamworkRequestBuilder
     */
    public function teamwork(): TeamworkRequestBuilder
    {
        return new TeamworkRequestBuilder($this->client, $this->buildPath('teamwork'));
    }

    /**
     * Get todo request builder
     *
     * @return TodoRequestBuilder
     */
    public function todo(): TodoRequestBuilder
    {
        return new TodoRequestBuilder($this->client, $this->buildPath('todo'));
    }

    /**
     * Get transitiveMemberOf request builder
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->buildPath('transitiveMemberOf'));
    }

}
