<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AppConsentApprovalRoute;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AppConsent\AppConsentRequestsRequestBuilder;

/**
 * Request builder for /identityGovernance/appConsent
 */
class AppConsentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get appConsent from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AppConsentApprovalRoute|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AppConsentApprovalRoute|null
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
     * Deserialize response to AppConsentApprovalRoute|null
     */
    private function deserializeGet(string $body): AppConsentApprovalRoute|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AppConsentApprovalRoute($data);
    }
    /**
     * Update the navigation property appConsent in identityGovernance
     * @param AppConsentApprovalRoute $body Request body
     * @return AppConsentApprovalRoute|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AppConsentApprovalRoute $body): AppConsentApprovalRoute|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AppConsentApprovalRoute|null
     */
    private function deserializePatch(string $body): AppConsentApprovalRoute|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AppConsentApprovalRoute($data);
    }
    /**
     * Delete navigation property appConsent for identityGovernance
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to appConsentRequests
     *
     * @return AppConsentRequestsRequestBuilder
     */
    public function appConsentRequests(): AppConsentRequestsRequestBuilder
    {
        return new AppConsentRequestsRequestBuilder($this->client, $this->requestUrl . '/appConsentRequests');
    }
}
