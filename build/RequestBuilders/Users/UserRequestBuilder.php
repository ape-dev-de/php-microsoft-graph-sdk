<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\User;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ActivitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\AgreementAcceptancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\AppRoleAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\AuthenticationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ChatsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CloudClipboardRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ContactFoldersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ContactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CreatedObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DeviceManagementTroubleshootingEventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DirectReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DriveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DrivesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\EmployeeExperienceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\EventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\FollowedSitesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\InferenceClassificationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\InsightsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeamsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\LicenseDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailboxSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFoldersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ManagedAppRegistrationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ManagedDevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ManagerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\AssignLicenseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ChangePasswordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ExportDeviceAndAppManagementDataRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ExportPersonalDataRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\FindMeetingTimesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetMailTipsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetManagedAppDiagnosticStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetManagedAppPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetManagedDevicesWithAppFailuresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ReminderViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\RemoveAllDevicesFromManagementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ReprocessLicenseAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\RetryServiceProvisioningRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\RevokeSignInSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\SendMailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\TranslateExchangeIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Oauth2PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OnenoteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OnlineMeetingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OutlookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OwnedDevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OwnedObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PeopleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PhotoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PhotosRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PlannerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\PresenceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\RegisteredDevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ScopedRoleMemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ServiceProvisioningErrorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\SettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\SolutionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\SponsorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\TeamworkRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\TodoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\TransitiveMemberOfRequestBuilder;

/**
 * Request builder for /users/{user-id}
 */
class UserRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get user
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return User
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): User
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to User
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new User($data);
    }
    /**
     * Update user
     * @param User $body Request body
     * @return User
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(User $body): User
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to User
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new User($data);
    }
    /**
     * Delete a user
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to activities
     *
     * @return ActivitiesRequestBuilder
     */
    public function activities(): ActivitiesRequestBuilder
    {
        return new ActivitiesRequestBuilder($this->client, $this->requestUrl . '/activities');
    }
    /**
     * Navigate to agreementAcceptances
     *
     * @return AgreementAcceptancesRequestBuilder
     */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder
    {
        return new AgreementAcceptancesRequestBuilder($this->client, $this->requestUrl . '/agreementAcceptances');
    }
    /**
     * Navigate to appRoleAssignments
     *
     * @return AppRoleAssignmentsRequestBuilder
     */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder
    {
        return new AppRoleAssignmentsRequestBuilder($this->client, $this->requestUrl . '/appRoleAssignments');
    }
    /**
     * Navigate to authentication
     *
     * @return AuthenticationRequestBuilder
     */
    public function authentication(): AuthenticationRequestBuilder
    {
        return new AuthenticationRequestBuilder($this->client, $this->requestUrl . '/authentication');
    }
    /**
     * Navigate to calendar
     *
     * @return CalendarRequestBuilder
     */
    public function calendar(): CalendarRequestBuilder
    {
        return new CalendarRequestBuilder($this->client, $this->requestUrl . '/calendar');
    }
    /**
     * Navigate to calendarGroups
     *
     * @return CalendarGroupsRequestBuilder
     */
    public function calendarGroups(): CalendarGroupsRequestBuilder
    {
        return new CalendarGroupsRequestBuilder($this->client, $this->requestUrl . '/calendarGroups');
    }
    /**
     * Navigate to calendars
     *
     * @return CalendarsRequestBuilder
     */
    public function calendars(): CalendarsRequestBuilder
    {
        return new CalendarsRequestBuilder($this->client, $this->requestUrl . '/calendars');
    }
    /**
     * Navigate to calendarView
     *
     * @return CalendarViewRequestBuilder
     */
    public function calendarView(): CalendarViewRequestBuilder
    {
        return new CalendarViewRequestBuilder($this->client, $this->requestUrl . '/calendarView');
    }
    /**
     * Navigate to chats
     *
     * @return ChatsRequestBuilder
     */
    public function chats(): ChatsRequestBuilder
    {
        return new ChatsRequestBuilder($this->client, $this->requestUrl . '/chats');
    }
    /**
     * Navigate to cloudClipboard
     *
     * @return CloudClipboardRequestBuilder
     */
    public function cloudClipboard(): CloudClipboardRequestBuilder
    {
        return new CloudClipboardRequestBuilder($this->client, $this->requestUrl . '/cloudClipboard');
    }
    /**
     * Navigate to contactFolders
     *
     * @return ContactFoldersRequestBuilder
     */
    public function contactFolders(): ContactFoldersRequestBuilder
    {
        return new ContactFoldersRequestBuilder($this->client, $this->requestUrl . '/contactFolders');
    }
    /**
     * Navigate to contacts
     *
     * @return ContactsRequestBuilder
     */
    public function contacts(): ContactsRequestBuilder
    {
        return new ContactsRequestBuilder($this->client, $this->requestUrl . '/contacts');
    }
    /**
     * Navigate to createdObjects
     *
     * @return CreatedObjectsRequestBuilder
     */
    public function createdObjects(): CreatedObjectsRequestBuilder
    {
        return new CreatedObjectsRequestBuilder($this->client, $this->requestUrl . '/createdObjects');
    }
    /**
     * Navigate to dataSecurityAndGovernance
     *
     * @return DataSecurityAndGovernanceRequestBuilder
     */
    public function dataSecurityAndGovernance(): DataSecurityAndGovernanceRequestBuilder
    {
        return new DataSecurityAndGovernanceRequestBuilder($this->client, $this->requestUrl . '/dataSecurityAndGovernance');
    }
    /**
     * Navigate to deviceManagementTroubleshootingEvents
     *
     * @return DeviceManagementTroubleshootingEventsRequestBuilder
     */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder
    {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->client, $this->requestUrl . '/deviceManagementTroubleshootingEvents');
    }
    /**
     * Navigate to directReports
     *
     * @return DirectReportsRequestBuilder
     */
    public function directReports(): DirectReportsRequestBuilder
    {
        return new DirectReportsRequestBuilder($this->client, $this->requestUrl . '/directReports');
    }
    /**
     * Navigate to drive
     *
     * @return DriveRequestBuilder
     */
    public function drive(): DriveRequestBuilder
    {
        return new DriveRequestBuilder($this->client, $this->requestUrl . '/drive');
    }
    /**
     * Navigate to drives
     *
     * @return DrivesRequestBuilder
     */
    public function drives(): DrivesRequestBuilder
    {
        return new DrivesRequestBuilder($this->client, $this->requestUrl . '/drives');
    }
    /**
     * Navigate to employeeExperience
     *
     * @return EmployeeExperienceRequestBuilder
     */
    public function employeeExperience(): EmployeeExperienceRequestBuilder
    {
        return new EmployeeExperienceRequestBuilder($this->client, $this->requestUrl . '/employeeExperience');
    }
    /**
     * Navigate to events
     *
     * @return EventsRequestBuilder
     */
    public function events(): EventsRequestBuilder
    {
        return new EventsRequestBuilder($this->client, $this->requestUrl . '/events');
    }
    /**
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to followedSites
     *
     * @return FollowedSitesRequestBuilder
     */
    public function followedSites(): FollowedSitesRequestBuilder
    {
        return new FollowedSitesRequestBuilder($this->client, $this->requestUrl . '/followedSites');
    }
    /**
     * Navigate to inferenceClassification
     *
     * @return InferenceClassificationRequestBuilder
     */
    public function inferenceClassification(): InferenceClassificationRequestBuilder
    {
        return new InferenceClassificationRequestBuilder($this->client, $this->requestUrl . '/inferenceClassification');
    }
    /**
     * Navigate to insights
     *
     * @return InsightsRequestBuilder
     */
    public function insights(): InsightsRequestBuilder
    {
        return new InsightsRequestBuilder($this->client, $this->requestUrl . '/insights');
    }
    /**
     * Navigate to joinedTeams
     *
     * @return JoinedTeamsRequestBuilder
     */
    public function joinedTeams(): JoinedTeamsRequestBuilder
    {
        return new JoinedTeamsRequestBuilder($this->client, $this->requestUrl . '/joinedTeams');
    }
    /**
     * Navigate to licenseDetails
     *
     * @return LicenseDetailsRequestBuilder
     */
    public function licenseDetails(): LicenseDetailsRequestBuilder
    {
        return new LicenseDetailsRequestBuilder($this->client, $this->requestUrl . '/licenseDetails');
    }
    /**
     * Navigate to mailboxSettings
     *
     * @return MailboxSettingsRequestBuilder
     */
    public function mailboxSettings(): MailboxSettingsRequestBuilder
    {
        return new MailboxSettingsRequestBuilder($this->client, $this->requestUrl . '/mailboxSettings');
    }
    /**
     * Navigate to mailFolders
     *
     * @return MailFoldersRequestBuilder
     */
    public function mailFolders(): MailFoldersRequestBuilder
    {
        return new MailFoldersRequestBuilder($this->client, $this->requestUrl . '/mailFolders');
    }
    /**
     * Navigate to managedAppRegistrations
     *
     * @return ManagedAppRegistrationsRequestBuilder
     */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder
    {
        return new ManagedAppRegistrationsRequestBuilder($this->client, $this->requestUrl . '/managedAppRegistrations');
    }
    /**
     * Navigate to managedDevices
     *
     * @return ManagedDevicesRequestBuilder
     */
    public function managedDevices(): ManagedDevicesRequestBuilder
    {
        return new ManagedDevicesRequestBuilder($this->client, $this->requestUrl . '/managedDevices');
    }
    /**
     * Navigate to manager
     *
     * @return ManagerRequestBuilder
     */
    public function manager(): ManagerRequestBuilder
    {
        return new ManagerRequestBuilder($this->client, $this->requestUrl . '/manager');
    }
    /**
     * Navigate to memberOf
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->requestUrl . '/memberOf');
    }
    /**
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
    }
    /**
     * Navigate to assignLicense
     *
     * @return AssignLicenseRequestBuilder
     */
    public function assignLicense(): AssignLicenseRequestBuilder
    {
        return new AssignLicenseRequestBuilder($this->client, $this->requestUrl . '/assignLicense');
    }
    /**
     * Navigate to changePassword
     *
     * @return ChangePasswordRequestBuilder
     */
    public function changePassword(): ChangePasswordRequestBuilder
    {
        return new ChangePasswordRequestBuilder($this->client, $this->requestUrl . '/changePassword');
    }
    /**
     * Navigate to checkMemberGroups
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/checkMemberGroups');
    }
    /**
     * Navigate to checkMemberObjects
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/checkMemberObjects');
    }
    /**
     * Navigate to exportDeviceAndAppManagementData()
     *
     * @return ExportDeviceAndAppManagementDataRequestBuilder
     */
    public function exportDeviceAndAppManagementData(): ExportDeviceAndAppManagementDataRequestBuilder
    {
        return new ExportDeviceAndAppManagementDataRequestBuilder($this->client, $this->requestUrl . '/exportDeviceAndAppManagementData()');
    }
    /**
     * Navigate to exportPersonalData
     *
     * @return ExportPersonalDataRequestBuilder
     */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder
    {
        return new ExportPersonalDataRequestBuilder($this->client, $this->requestUrl . '/exportPersonalData');
    }
    /**
     * Navigate to findMeetingTimes
     *
     * @return FindMeetingTimesRequestBuilder
     */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder
    {
        return new FindMeetingTimesRequestBuilder($this->client, $this->requestUrl . '/findMeetingTimes');
    }
    /**
     * Navigate to getMailTips
     *
     * @return GetMailTipsRequestBuilder
     */
    public function getMailTips(): GetMailTipsRequestBuilder
    {
        return new GetMailTipsRequestBuilder($this->client, $this->requestUrl . '/getMailTips');
    }
    /**
     * Navigate to getManagedAppDiagnosticStatuses()
     *
     * @return GetManagedAppDiagnosticStatusesRequestBuilder
     */
    public function getManagedAppDiagnosticStatuses(): GetManagedAppDiagnosticStatusesRequestBuilder
    {
        return new GetManagedAppDiagnosticStatusesRequestBuilder($this->client, $this->requestUrl . '/getManagedAppDiagnosticStatuses()');
    }
    /**
     * Navigate to getManagedAppPolicies()
     *
     * @return GetManagedAppPoliciesRequestBuilder
     */
    public function getManagedAppPolicies(): GetManagedAppPoliciesRequestBuilder
    {
        return new GetManagedAppPoliciesRequestBuilder($this->client, $this->requestUrl . '/getManagedAppPolicies()');
    }
    /**
     * Navigate to getManagedDevicesWithAppFailures()
     *
     * @return GetManagedDevicesWithAppFailuresRequestBuilder
     */
    public function getManagedDevicesWithAppFailures(): GetManagedDevicesWithAppFailuresRequestBuilder
    {
        return new GetManagedDevicesWithAppFailuresRequestBuilder($this->client, $this->requestUrl . '/getManagedDevicesWithAppFailures()');
    }
    /**
     * Navigate to getMemberGroups
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/getMemberGroups');
    }
    /**
     * Navigate to getMemberObjects
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/getMemberObjects');
    }
    /**
     * Navigate to removeAllDevicesFromManagement
     *
     * @return RemoveAllDevicesFromManagementRequestBuilder
     */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder
    {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->client, $this->requestUrl . '/removeAllDevicesFromManagement');
    }
    /**
     * Navigate to reprocessLicenseAssignment
     *
     * @return ReprocessLicenseAssignmentRequestBuilder
     */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder
    {
        return new ReprocessLicenseAssignmentRequestBuilder($this->client, $this->requestUrl . '/reprocessLicenseAssignment');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to retryServiceProvisioning
     *
     * @return RetryServiceProvisioningRequestBuilder
     */
    public function retryServiceProvisioning(): RetryServiceProvisioningRequestBuilder
    {
        return new RetryServiceProvisioningRequestBuilder($this->client, $this->requestUrl . '/retryServiceProvisioning');
    }
    /**
     * Navigate to revokeSignInSessions
     *
     * @return RevokeSignInSessionsRequestBuilder
     */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder
    {
        return new RevokeSignInSessionsRequestBuilder($this->client, $this->requestUrl . '/revokeSignInSessions');
    }
    /**
     * Navigate to sendMail
     *
     * @return SendMailRequestBuilder
     */
    public function sendMail(): SendMailRequestBuilder
    {
        return new SendMailRequestBuilder($this->client, $this->requestUrl . '/sendMail');
    }
    /**
     * Navigate to translateExchangeIds
     *
     * @return TranslateExchangeIdsRequestBuilder
     */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder
    {
        return new TranslateExchangeIdsRequestBuilder($this->client, $this->requestUrl . '/translateExchangeIds');
    }
    /**
     * Navigate to wipeManagedAppRegistrationsByDeviceTag
     *
     * @return WipeManagedAppRegistrationsByDeviceTagRequestBuilder
     */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder
    {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->client, $this->requestUrl . '/wipeManagedAppRegistrationsByDeviceTag');
    }
    /**
     * Navigate to oauth2PermissionGrants
     *
     * @return Oauth2PermissionGrantsRequestBuilder
     */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder
    {
        return new Oauth2PermissionGrantsRequestBuilder($this->client, $this->requestUrl . '/oauth2PermissionGrants');
    }
    /**
     * Navigate to onenote
     *
     * @return OnenoteRequestBuilder
     */
    public function onenote(): OnenoteRequestBuilder
    {
        return new OnenoteRequestBuilder($this->client, $this->requestUrl . '/onenote');
    }
    /**
     * Navigate to onlineMeetings
     *
     * @return OnlineMeetingsRequestBuilder
     */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder
    {
        return new OnlineMeetingsRequestBuilder($this->client, $this->requestUrl . '/onlineMeetings');
    }
    /**
     * Navigate to outlook
     *
     * @return OutlookRequestBuilder
     */
    public function outlook(): OutlookRequestBuilder
    {
        return new OutlookRequestBuilder($this->client, $this->requestUrl . '/outlook');
    }
    /**
     * Navigate to ownedDevices
     *
     * @return OwnedDevicesRequestBuilder
     */
    public function ownedDevices(): OwnedDevicesRequestBuilder
    {
        return new OwnedDevicesRequestBuilder($this->client, $this->requestUrl . '/ownedDevices');
    }
    /**
     * Navigate to ownedObjects
     *
     * @return OwnedObjectsRequestBuilder
     */
    public function ownedObjects(): OwnedObjectsRequestBuilder
    {
        return new OwnedObjectsRequestBuilder($this->client, $this->requestUrl . '/ownedObjects');
    }
    /**
     * Navigate to people
     *
     * @return PeopleRequestBuilder
     */
    public function people(): PeopleRequestBuilder
    {
        return new PeopleRequestBuilder($this->client, $this->requestUrl . '/people');
    }
    /**
     * Navigate to permissionGrants
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->requestUrl . '/permissionGrants');
    }
    /**
     * Navigate to photo
     *
     * @return PhotoRequestBuilder
     */
    public function photo(): PhotoRequestBuilder
    {
        return new PhotoRequestBuilder($this->client, $this->requestUrl . '/photo');
    }
    /**
     * Navigate to photos
     *
     * @return PhotosRequestBuilder
     */
    public function photos(): PhotosRequestBuilder
    {
        return new PhotosRequestBuilder($this->client, $this->requestUrl . '/photos');
    }
    /**
     * Navigate to planner
     *
     * @return PlannerRequestBuilder
     */
    public function planner(): PlannerRequestBuilder
    {
        return new PlannerRequestBuilder($this->client, $this->requestUrl . '/planner');
    }
    /**
     * Navigate to presence
     *
     * @return PresenceRequestBuilder
     */
    public function presence(): PresenceRequestBuilder
    {
        return new PresenceRequestBuilder($this->client, $this->requestUrl . '/presence');
    }
    /**
     * Navigate to registeredDevices
     *
     * @return RegisteredDevicesRequestBuilder
     */
    public function registeredDevices(): RegisteredDevicesRequestBuilder
    {
        return new RegisteredDevicesRequestBuilder($this->client, $this->requestUrl . '/registeredDevices');
    }
    /**
     * Navigate to scopedRoleMemberOf
     *
     * @return ScopedRoleMemberOfRequestBuilder
     */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder
    {
        return new ScopedRoleMemberOfRequestBuilder($this->client, $this->requestUrl . '/scopedRoleMemberOf');
    }
    /**
     * Navigate to serviceProvisioningErrors
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->requestUrl . '/serviceProvisioningErrors');
    }
    /**
     * Navigate to settings
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->requestUrl . '/settings');
    }
    /**
     * Navigate to solutions
     *
     * @return SolutionsRequestBuilder
     */
    public function solutions(): SolutionsRequestBuilder
    {
        return new SolutionsRequestBuilder($this->client, $this->requestUrl . '/solutions');
    }
    /**
     * Navigate to sponsors
     *
     * @return SponsorsRequestBuilder
     */
    public function sponsors(): SponsorsRequestBuilder
    {
        return new SponsorsRequestBuilder($this->client, $this->requestUrl . '/sponsors');
    }
    /**
     * Navigate to teamwork
     *
     * @return TeamworkRequestBuilder
     */
    public function teamwork(): TeamworkRequestBuilder
    {
        return new TeamworkRequestBuilder($this->client, $this->requestUrl . '/teamwork');
    }
    /**
     * Navigate to todo
     *
     * @return TodoRequestBuilder
     */
    public function todo(): TodoRequestBuilder
    {
        return new TodoRequestBuilder($this->client, $this->requestUrl . '/todo');
    }
    /**
     * Navigate to transitiveMemberOf
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->requestUrl . '/transitiveMemberOf');
    }
}
