<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OrgContact;

/**
 * Request builder for individual OrgContact item
 */
class OrgContactItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OrgContact item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OrgContact
     */
    public function get(?array $queryParameters = null): OrgContact
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OrgContact::class);
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
     * Get serviceProvisioningErrors request builder
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->buildPath('serviceProvisioningErrors'));
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
