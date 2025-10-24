<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\InferenceClassification;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\InferenceClassification\OverridesRequestBuilder;

/**
 * Request builder for /users/{user-id}/inferenceClassification
 */
class InferenceClassificationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get inferenceClassification from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return InferenceClassification
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): InferenceClassification
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
     * Deserialize response to InferenceClassification
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
        return new InferenceClassification($data);
    }
    /**
     * Update the navigation property inferenceClassification in users
     * @param InferenceClassification $body Request body
     * @return InferenceClassification
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(InferenceClassification $body): InferenceClassification
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to InferenceClassification
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
        return new InferenceClassification($data);
    }
    /**
     * Navigate to overrides
     *
     * @return OverridesRequestBuilder
     */
    public function overrides(): OverridesRequestBuilder
    {
        return new OverridesRequestBuilder($this->client, $this->requestUrl . '/overrides');
    }
}
