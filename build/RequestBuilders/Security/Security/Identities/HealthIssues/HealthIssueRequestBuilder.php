<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Identities\HealthIssues;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHealthIssue;

/**
 * Request builder for /security/identities/healthIssues/{healthIssue-id}
 */
class HealthIssueRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get healthIssue
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityHealthIssue
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityHealthIssue
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
     * Deserialize response to SecurityHealthIssue
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
        return new SecurityHealthIssue($data);
    }
    /**
     * Update healthIssue
     * @param SecurityHealthIssue $body Request body
     * @return SecurityHealthIssue
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityHealthIssue $body): SecurityHealthIssue
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityHealthIssue
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
        return new SecurityHealthIssue($data);
    }
    /**
     * Delete navigation property healthIssues for security
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
}
