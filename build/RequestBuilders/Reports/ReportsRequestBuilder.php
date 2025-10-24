<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\AuthenticationMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\DailyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\DailyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\DeviceConfigurationDeviceActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\DeviceConfigurationUserActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailAppUsageAppsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailAppUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailAppUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetEmailAppUsageVersionsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetGroupArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetM365AppPlatformUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetM365AppUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetM365AppUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetMailboxUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetMailboxUsageMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetMailboxUsageQuotaStatusMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetMailboxUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ActivationCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ActivationsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ActivationsUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ActiveUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ActiveUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365GroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365GroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365GroupsActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365GroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365GroupsActivityStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOffice365ServicesUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveUsageAccountCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveUsageAccountDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetOneDriveUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetPrinterArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetRelyingPartyDetailedSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointActivityPagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointSiteUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointSiteUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointSiteUsagePagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointSiteUsageSiteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSharePointSiteUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessOrganizerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessOrganizerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessOrganizerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessParticipantActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessParticipantActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessParticipantActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessPeerToPeerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessPeerToPeerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetSkypeForBusinessPeerToPeerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsTeamActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsTeamActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsTeamActivityDistributionCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsTeamCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsUserActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsUserActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetTeamsUserActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetUserArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerGroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerGroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\GetYammerGroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\MonthlyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\MonthlyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\PartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Reports\SecurityRequestBuilder;

/**
 * Request builder for /reports
 */
class ReportsRequestBuilder extends RootBaseRequestBuilder
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
