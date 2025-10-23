<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AccessReviewsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppConsentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EntitlementManagementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LifecycleWorkflowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PrivilegedAccessRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TermsOfUseRequestBuilder;

/**
 * Request builder for identityGovernance
 */
class IdentityGovernanceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernance
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
     * Deserialize response to IdentityGovernance
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
        return new IdentityGovernance($data);
    }
    /**
     * Update identityGovernance
     * @param IdentityGovernance $body Request body
     * @return IdentityGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityGovernance $body): IdentityGovernance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernance
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
        return new IdentityGovernance($data);
    }
    /**
     * Navigate to accessReviews
     *
     * @return AccessReviewsRequestBuilder
     */
    public function accessReviews(): AccessReviewsRequestBuilder
    {
        return new AccessReviewsRequestBuilder($this->client, $this->requestUrl . '/accessReviews');
    }
    /**
     * Navigate to appConsent
     *
     * @return AppConsentRequestBuilder
     */
    public function appConsent(): AppConsentRequestBuilder
    {
        return new AppConsentRequestBuilder($this->client, $this->requestUrl . '/appConsent');
    }
    /**
     * Navigate to entitlementManagement
     *
     * @return EntitlementManagementRequestBuilder
     */
    public function entitlementManagement(): EntitlementManagementRequestBuilder
    {
        return new EntitlementManagementRequestBuilder($this->client, $this->requestUrl . '/entitlementManagement');
    }
    /**
     * Navigate to lifecycleWorkflows
     *
     * @return LifecycleWorkflowsRequestBuilder
     */
    public function lifecycleWorkflows(): LifecycleWorkflowsRequestBuilder
    {
        return new LifecycleWorkflowsRequestBuilder($this->client, $this->requestUrl . '/lifecycleWorkflows');
    }
    /**
     * Navigate to privilegedAccess
     *
     * @return PrivilegedAccessRequestBuilder
     */
    public function privilegedAccess(): PrivilegedAccessRequestBuilder
    {
        return new PrivilegedAccessRequestBuilder($this->client, $this->requestUrl . '/privilegedAccess');
    }
    /**
     * Navigate to termsOfUse
     *
     * @return TermsOfUseRequestBuilder
     */
    public function termsOfUse(): TermsOfUseRequestBuilder
    {
        return new TermsOfUseRequestBuilder($this->client, $this->requestUrl . '/termsOfUse');
    }
}
