<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Privacy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequestsRequestBuilder;

/**
 * Request builder for /privacy
 */
class PrivacyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get privacy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Privacy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Privacy|null
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
     * Deserialize response to Privacy|null
     */
    private function deserializeGet(string $body): Privacy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Privacy($data);
    }
    /**
     * Update privacy
     * @param Privacy $body Request body
     * @return Privacy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Privacy $body): Privacy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Privacy|null
     */
    private function deserializePatch(string $body): Privacy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Privacy($data);
    }
    /**
     * Navigate to subjectRightsRequests
     *
     * @return SubjectRightsRequestsRequestBuilder
     */
    public function subjectRightsRequests(): SubjectRightsRequestsRequestBuilder
    {
        return new SubjectRightsRequestsRequestBuilder($this->client, $this->requestUrl . '/subjectRightsRequests');
    }
}
