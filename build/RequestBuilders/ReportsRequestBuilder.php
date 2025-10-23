<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DailyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DailyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceConfigurationDeviceActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceConfigurationUserActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailAppUsageAppsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailAppUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailAppUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetEmailAppUsageVersionsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetGroupArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetM365AppPlatformUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetM365AppUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetM365AppUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMailboxUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMailboxUsageMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMailboxUsageQuotaStatusMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMailboxUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ActivationCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ActivationsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ActivationsUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ActiveUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ActiveUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365GroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365GroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365GroupsActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365GroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365GroupsActivityStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOffice365ServicesUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveUsageAccountCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveUsageAccountDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetOneDriveUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetPrinterArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetRelyingPartyDetailedSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointActivityPagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointSiteUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointSiteUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointSiteUsagePagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointSiteUsageSiteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSharePointSiteUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessOrganizerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessOrganizerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessOrganizerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessParticipantActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessParticipantActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessParticipantActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessPeerToPeerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessPeerToPeerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetSkypeForBusinessPeerToPeerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsTeamActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsTeamActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsTeamActivityDistributionCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsTeamCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsUserActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsUserActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetTeamsUserActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetUserArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerGroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerGroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetYammerGroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MonthlyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MonthlyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityRequestBuilder;

/**
 * Request builder for reports
 */
class ReportsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get reportRoot
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ReportRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ReportRoot
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ReportRoot
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
        return new ReportRoot($data);
    }
    /**
     * Update reportRoot
     * @param ReportRoot $body Request body
     * @return ReportRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ReportRoot $body): ReportRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ReportRoot
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
        return new ReportRoot($data);
    }
    /**
     * Navigate to authenticationMethods
     *
     * @return AuthenticationMethodsRequestBuilder
     */
    public function authenticationMethods(): AuthenticationMethodsRequestBuilder
    {
        return new AuthenticationMethodsRequestBuilder($this->client, $this->requestUrl . '/authenticationMethods');
    }
    /**
     * Navigate to dailyPrintUsageByPrinter
     *
     * @return DailyPrintUsageByPrinterRequestBuilder
     */
    public function dailyPrintUsageByPrinter(): DailyPrintUsageByPrinterRequestBuilder
    {
        return new DailyPrintUsageByPrinterRequestBuilder($this->client, $this->requestUrl . '/dailyPrintUsageByPrinter');
    }
    /**
     * Navigate to dailyPrintUsageByUser
     *
     * @return DailyPrintUsageByUserRequestBuilder
     */
    public function dailyPrintUsageByUser(): DailyPrintUsageByUserRequestBuilder
    {
        return new DailyPrintUsageByUserRequestBuilder($this->client, $this->requestUrl . '/dailyPrintUsageByUser');
    }
    /**
     * Navigate to deviceConfigurationDeviceActivity()
     *
     * @return DeviceConfigurationDeviceActivityRequestBuilder
     */
    public function deviceConfigurationDeviceActivity(): DeviceConfigurationDeviceActivityRequestBuilder
    {
        return new DeviceConfigurationDeviceActivityRequestBuilder($this->client, $this->requestUrl . '/deviceConfigurationDeviceActivity()');
    }
    /**
     * Navigate to deviceConfigurationUserActivity()
     *
     * @return DeviceConfigurationUserActivityRequestBuilder
     */
    public function deviceConfigurationUserActivity(): DeviceConfigurationUserActivityRequestBuilder
    {
        return new DeviceConfigurationUserActivityRequestBuilder($this->client, $this->requestUrl . '/deviceConfigurationUserActivity()');
    }
    /**
     * Navigate to getOffice365ActivationCounts()
     *
     * @return GetOffice365ActivationCountsRequestBuilder
     */
    public function getOffice365ActivationCounts(): GetOffice365ActivationCountsRequestBuilder
    {
        return new GetOffice365ActivationCountsRequestBuilder($this->client, $this->requestUrl . '/getOffice365ActivationCounts()');
    }
    /**
     * Navigate to getOffice365ActivationsUserCounts()
     *
     * @return GetOffice365ActivationsUserCountsRequestBuilder
     */
    public function getOffice365ActivationsUserCounts(): GetOffice365ActivationsUserCountsRequestBuilder
    {
        return new GetOffice365ActivationsUserCountsRequestBuilder($this->client, $this->requestUrl . '/getOffice365ActivationsUserCounts()');
    }
    /**
     * Navigate to getOffice365ActivationsUserDetail()
     *
     * @return GetOffice365ActivationsUserDetailRequestBuilder
     */
    public function getOffice365ActivationsUserDetail(): GetOffice365ActivationsUserDetailRequestBuilder
    {
        return new GetOffice365ActivationsUserDetailRequestBuilder($this->client, $this->requestUrl . '/getOffice365ActivationsUserDetail()');
    }
    /**
     * Navigate to managedDeviceEnrollmentFailureDetails()
     *
     * @return ManagedDeviceEnrollmentFailureDetailsRequestBuilder
     */
    public function managedDeviceEnrollmentFailureDetails(): ManagedDeviceEnrollmentFailureDetailsRequestBuilder
    {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->client, $this->requestUrl . '/managedDeviceEnrollmentFailureDetails()');
    }
    /**
     * Navigate to managedDeviceEnrollmentTopFailures()
     *
     * @return ManagedDeviceEnrollmentTopFailuresRequestBuilder
     */
    public function managedDeviceEnrollmentTopFailures(): ManagedDeviceEnrollmentTopFailuresRequestBuilder
    {
        return new ManagedDeviceEnrollmentTopFailuresRequestBuilder($this->client, $this->requestUrl . '/managedDeviceEnrollmentTopFailures()');
    }
    /**
     * Navigate to monthlyPrintUsageByPrinter
     *
     * @return MonthlyPrintUsageByPrinterRequestBuilder
     */
    public function monthlyPrintUsageByPrinter(): MonthlyPrintUsageByPrinterRequestBuilder
    {
        return new MonthlyPrintUsageByPrinterRequestBuilder($this->client, $this->requestUrl . '/monthlyPrintUsageByPrinter');
    }
    /**
     * Navigate to monthlyPrintUsageByUser
     *
     * @return MonthlyPrintUsageByUserRequestBuilder
     */
    public function monthlyPrintUsageByUser(): MonthlyPrintUsageByUserRequestBuilder
    {
        return new MonthlyPrintUsageByUserRequestBuilder($this->client, $this->requestUrl . '/monthlyPrintUsageByUser');
    }
    /**
     * Navigate to partners
     *
     * @return PartnersRequestBuilder
     */
    public function partners(): PartnersRequestBuilder
    {
        return new PartnersRequestBuilder($this->client, $this->requestUrl . '/partners');
    }
    /**
     * Navigate to security
     *
     * @return SecurityRequestBuilder
     */
    public function security(): SecurityRequestBuilder
    {
        return new SecurityRequestBuilder($this->client, $this->requestUrl . '/security');
    }
}
