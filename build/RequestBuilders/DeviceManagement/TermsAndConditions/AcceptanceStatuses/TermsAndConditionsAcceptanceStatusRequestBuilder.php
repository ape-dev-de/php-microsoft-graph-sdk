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
     * @return TermsAndConditionsAcceptanceStatus|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermsAndConditionsAcceptanceStatus|null
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
     * Deserialize response to TermsAndConditionsAcceptanceStatus|null
     */
    private function deserializeGet(string $body): TermsAndConditionsAcceptanceStatus|null    {
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
     * @return TermsAndConditionsAcceptanceStatus|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermsAndConditionsAcceptanceStatus $body): TermsAndConditionsAcceptanceStatus|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermsAndConditionsAcceptanceStatus|null
     */
    private function deserializePatch(string $body): TermsAndConditionsAcceptanceStatus|null    {
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
     * Navigate to termsAndConditions
     *
     * @return TermsAndConditionsRequestBuilder
     */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder
    {
        return new TermsAndConditionsRequestBuilder($this->client, $this->requestUrl . '/termsAndConditions');
    }
}
