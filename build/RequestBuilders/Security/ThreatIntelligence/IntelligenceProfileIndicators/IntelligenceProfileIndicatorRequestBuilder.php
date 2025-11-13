<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\IntelligenceProfileIndicators;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityIntelligenceProfileIndicator;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\IntelligenceProfileIndicators\ArtifactRequestBuilder;

/**
 * Request builder for /security/threatIntelligence/intelligenceProfileIndicators/{intelligenceProfileIndicator-id}
 */
class IntelligenceProfileIndicatorRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get intelligenceProfileIndicator
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityIntelligenceProfileIndicator|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityIntelligenceProfileIndicator|null
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
     * Deserialize response to SecurityIntelligenceProfileIndicator|null
     */
    private function deserializeGet(string $body): SecurityIntelligenceProfileIndicator|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityIntelligenceProfileIndicator($data);
    }
    /**
     * Update the navigation property intelligenceProfileIndicators in security
     * @param SecurityIntelligenceProfileIndicator $body Request body
     * @return SecurityIntelligenceProfileIndicator|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityIntelligenceProfileIndicator $body): SecurityIntelligenceProfileIndicator|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityIntelligenceProfileIndicator|null
     */
    private function deserializePatch(string $body): SecurityIntelligenceProfileIndicator|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityIntelligenceProfileIndicator($data);
    }
    /**
     * Delete navigation property intelligenceProfileIndicators for security
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
     * Navigate to artifact
     *
     * @return ArtifactRequestBuilder
     */
    public function artifact(): ArtifactRequestBuilder
    {
        return new ArtifactRequestBuilder($this->client, $this->requestUrl . '/artifact');
    }
}
