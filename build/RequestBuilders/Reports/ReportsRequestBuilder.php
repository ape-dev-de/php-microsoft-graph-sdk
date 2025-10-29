<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\DailyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\DailyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\DeviceConfigurationDeviceActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\DeviceConfigurationUserActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailAppUsageAppsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailAppUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailAppUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetEmailAppUsageVersionsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetGroupArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetM365AppPlatformUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetM365AppUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetM365AppUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetMailboxUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetMailboxUsageMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetMailboxUsageQuotaStatusMailboxCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetMailboxUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ActivationCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ActivationsUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ActivationsUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ActiveUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ActiveUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365GroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365GroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365GroupsActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365GroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365GroupsActivityStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOffice365ServicesUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveUsageAccountCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveUsageAccountDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetOneDriveUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetPrinterArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetRelyingPartyDetailedSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointActivityFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointActivityPagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointSiteUsageDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointSiteUsageFileCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointSiteUsagePagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointSiteUsageSiteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSharePointSiteUsageStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessOrganizerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessOrganizerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessOrganizerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessParticipantActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessParticipantActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessParticipantActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessPeerToPeerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessPeerToPeerActivityMinuteCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetSkypeForBusinessPeerToPeerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsTeamActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsTeamActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsTeamActivityDistributionCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsTeamCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsUserActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsUserActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetTeamsUserActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetUserArchivedPrintJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerActivityUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerActivityUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerDeviceUsageDistributionUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerDeviceUsageUserCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerDeviceUsageUserDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerGroupsActivityCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerGroupsActivityDetailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\GetYammerGroupsActivityGroupCountsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\MonthlyPrintUsageByPrinterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\MonthlyPrintUsageByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\PartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\SecurityRequestBuilder;

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
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
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
