<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\ThreatAssessmentRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ThreatAssessmentRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\ThreatAssessmentRequests\ResultsRequestBuilder;

/**
 * Request builder for /informationProtection/threatAssessmentRequests/{threatAssessmentRequest-id}
 */
class ThreatAssessmentRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get threatAssessmentRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ThreatAssessmentRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ThreatAssessmentRequest|null
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
     * Deserialize response to ThreatAssessmentRequest|null
     */
    private function deserializeGet(string $body): ThreatAssessmentRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ThreatAssessmentRequest($data);
    }
    /**
     * Update the navigation property threatAssessmentRequests in informationProtection
     * @param ThreatAssessmentRequest $body Request body
     * @return ThreatAssessmentRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ThreatAssessmentRequest $body): ThreatAssessmentRequest|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ThreatAssessmentRequest|null
     */
    private function deserializePatch(string $body): ThreatAssessmentRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ThreatAssessmentRequest($data);
    }
    /**
     * Delete navigation property threatAssessmentRequests for informationProtection
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
     * Navigate to results
     *
     * @return ResultsRequestBuilder
     */
    public function results(): ResultsRequestBuilder
    {
        return new ResultsRequestBuilder($this->client, $this->requestUrl . '/results');
    }
}
