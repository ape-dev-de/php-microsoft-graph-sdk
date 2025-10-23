<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RightsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SublabelsRequestBuilder;

/**
 * Request builder for {sensitivityLabel-id}
 */
class SensitivityLabelRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get sensitivityLabels from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SensitivityLabel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SensitivityLabel
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
     * Deserialize response to SensitivityLabel
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
        return new SensitivityLabel($data);
    }
    /**
     * Update the navigation property sensitivityLabels in me
     * @param SensitivityLabel $body Request body
     * @return SensitivityLabel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SensitivityLabel $body): SensitivityLabel
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SensitivityLabel
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
        return new SensitivityLabel($data);
    }
    /**
     * Delete navigation property sensitivityLabels for me
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
     * Navigate to rights
     *
     * @return RightsRequestBuilder
     */
    public function rights(): RightsRequestBuilder
    {
        return new RightsRequestBuilder($this->client, $this->requestUrl . '/rights');
    }
    /**
     * Navigate to sublabels
     *
     * @return SublabelsRequestBuilder
     */
    public function sublabels(): SublabelsRequestBuilder
    {
        return new SublabelsRequestBuilder($this->client, $this->requestUrl . '/sublabels');
    }
}
