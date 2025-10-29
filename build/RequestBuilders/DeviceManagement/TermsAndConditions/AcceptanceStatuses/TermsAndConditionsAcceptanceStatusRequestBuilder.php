<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditions\AcceptanceStatuses;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermsAndConditionsAcceptanceStatus;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditions\AcceptanceStatuses\TermsAndConditionsRequestBuilder;

/**
 * Request builder for /deviceManagement/termsAndConditions/{termsAndConditions-id}/acceptanceStatuses/{termsAndConditionsAcceptanceStatus-id}
 */
class TermsAndConditionsAcceptanceStatusRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get termsAndConditionsAcceptanceStatus
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermsAndConditionsAcceptanceStatus
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermsAndConditionsAcceptanceStatus
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
     * Deserialize response to TermsAndConditionsAcceptanceStatus
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
        return new TermsAndConditionsAcceptanceStatus($data);
    }
    /**
     * Update termsAndConditionsAcceptanceStatus
     * @param TermsAndConditionsAcceptanceStatus $body Request body
     * @return TermsAndConditionsAcceptanceStatus
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermsAndConditionsAcceptanceStatus $body): TermsAndConditionsAcceptanceStatus
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermsAndConditionsAcceptanceStatus
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
        return new TermsAndConditionsAcceptanceStatus($data);
    }
    /**
     * Delete termsAndConditionsAcceptanceStatus
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
     * Navigate to termsAndConditions
     *
     * @return TermsAndConditionsRequestBuilder
     */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder
    {
        return new TermsAndConditionsRequestBuilder($this->client, $this->requestUrl . '/termsAndConditions');
    }
}
