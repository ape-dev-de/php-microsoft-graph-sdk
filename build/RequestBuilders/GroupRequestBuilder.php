<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AcceptedSendersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppRoleAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CalendarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CalendarViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConversationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CreatedOnBehalfOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DrivesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupLifecyclePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MembersWithLicenseErrorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AddFavoriteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignLicenseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckGrantedPermissionsForAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RemoveFavoriteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RenewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ResetUnseenCountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RetryServiceProvisioningRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubscribeByMailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnsubscribeByMailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ValidatePropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnenoteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OwnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PhotoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PhotosRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PlannerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RejectedSendersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServiceProvisioningErrorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SitesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TeamRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ThreadsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TransitiveMemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TransitiveMembersRequestBuilder;

/**
 * Request builder for {group-id}
 */
class GroupRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get group
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Group
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Group
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Group
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
        return new Group($data);
    }
    /**
     * Upsert group
     * @param Group $body Request body
     * @return Group
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Group $body): Group
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Group
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
        return new Group($data);
    }
    /**
     * Delete group
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to acceptedSenders
     *
     * @return AcceptedSendersRequestBuilder
     */
    public function acceptedSenders(): AcceptedSendersRequestBuilder
    {
        return new AcceptedSendersRequestBuilder($this->client, $this->requestUrl . '/acceptedSenders');
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
     * Navigate to calendar
     *
     * @return CalendarRequestBuilder
     */
    public function calendar(): CalendarRequestBuilder
    {
        return new CalendarRequestBuilder($this->client, $this->requestUrl . '/calendar');
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
     * Navigate to conversations
     *
     * @return ConversationsRequestBuilder
     */
    public function conversations(): ConversationsRequestBuilder
    {
        return new ConversationsRequestBuilder($this->client, $this->requestUrl . '/conversations');
    }
    /**
     * Navigate to createdOnBehalfOf
     *
     * @return CreatedOnBehalfOfRequestBuilder
     */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder
    {
        return new CreatedOnBehalfOfRequestBuilder($this->client, $this->requestUrl . '/createdOnBehalfOf');
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
     * Navigate to groupLifecyclePolicies
     *
     * @return GroupLifecyclePoliciesRequestBuilder
     */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder
    {
        return new GroupLifecyclePoliciesRequestBuilder($this->client, $this->requestUrl . '/groupLifecyclePolicies');
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
     * Navigate to members
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->requestUrl . '/members');
    }
    /**
     * Navigate to membersWithLicenseErrors
     *
     * @return MembersWithLicenseErrorsRequestBuilder
     */
    public function membersWithLicenseErrors(): MembersWithLicenseErrorsRequestBuilder
    {
        return new MembersWithLicenseErrorsRequestBuilder($this->client, $this->requestUrl . '/membersWithLicenseErrors');
    }
    /**
     * Navigate to addFavorite
     *
     * @return AddFavoriteRequestBuilder
     */
    public function addFavorite(): AddFavoriteRequestBuilder
    {
        return new AddFavoriteRequestBuilder($this->client, $this->requestUrl . '/addFavorite');
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
     * Navigate to checkGrantedPermissionsForApp
     *
     * @return CheckGrantedPermissionsForAppRequestBuilder
     */
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder
    {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->client, $this->requestUrl . '/checkGrantedPermissionsForApp');
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
     * Navigate to removeFavorite
     *
     * @return RemoveFavoriteRequestBuilder
     */
    public function removeFavorite(): RemoveFavoriteRequestBuilder
    {
        return new RemoveFavoriteRequestBuilder($this->client, $this->requestUrl . '/removeFavorite');
    }
    /**
     * Navigate to renew
     *
     * @return RenewRequestBuilder
     */
    public function renew(): RenewRequestBuilder
    {
        return new RenewRequestBuilder($this->client, $this->requestUrl . '/renew');
    }
    /**
     * Navigate to resetUnseenCount
     *
     * @return ResetUnseenCountRequestBuilder
     */
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder
    {
        return new ResetUnseenCountRequestBuilder($this->client, $this->requestUrl . '/resetUnseenCount');
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
     * Navigate to subscribeByMail
     *
     * @return SubscribeByMailRequestBuilder
     */
    public function subscribeByMail(): SubscribeByMailRequestBuilder
    {
        return new SubscribeByMailRequestBuilder($this->client, $this->requestUrl . '/subscribeByMail');
    }
    /**
     * Navigate to unsubscribeByMail
     *
     * @return UnsubscribeByMailRequestBuilder
     */
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder
    {
        return new UnsubscribeByMailRequestBuilder($this->client, $this->requestUrl . '/unsubscribeByMail');
    }
    /**
     * Navigate to validateProperties
     *
     * @return ValidatePropertiesRequestBuilder
     */
    public function validateProperties(): ValidatePropertiesRequestBuilder
    {
        return new ValidatePropertiesRequestBuilder($this->client, $this->requestUrl . '/validateProperties');
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
     * Navigate to owners
     *
     * @return OwnersRequestBuilder
     */
    public function owners(): OwnersRequestBuilder
    {
        return new OwnersRequestBuilder($this->client, $this->requestUrl . '/owners');
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
     * Navigate to rejectedSenders
     *
     * @return RejectedSendersRequestBuilder
     */
    public function rejectedSenders(): RejectedSendersRequestBuilder
    {
        return new RejectedSendersRequestBuilder($this->client, $this->requestUrl . '/rejectedSenders');
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
     * Navigate to sites
     *
     * @return SitesRequestBuilder
     */
    public function sites(): SitesRequestBuilder
    {
        return new SitesRequestBuilder($this->client, $this->requestUrl . '/sites');
    }
    /**
     * Navigate to team
     *
     * @return TeamRequestBuilder
     */
    public function team(): TeamRequestBuilder
    {
        return new TeamRequestBuilder($this->client, $this->requestUrl . '/team');
    }
    /**
     * Navigate to threads
     *
     * @return ThreadsRequestBuilder
     */
    public function threads(): ThreadsRequestBuilder
    {
        return new ThreadsRequestBuilder($this->client, $this->requestUrl . '/threads');
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
    /**
     * Navigate to transitiveMembers
     *
     * @return TransitiveMembersRequestBuilder
     */
    public function transitiveMembers(): TransitiveMembersRequestBuilder
    {
        return new TransitiveMembersRequestBuilder($this->client, $this->requestUrl . '/transitiveMembers');
    }
}
