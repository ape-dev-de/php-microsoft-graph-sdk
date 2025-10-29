<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\GroupLifecyclePolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\GroupLifecyclePolicies\AddGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\GroupLifecyclePolicies\RemoveGroupRequestBuilder;

/**
 * Request builder for /groups/{group-id}/groupLifecyclePolicies/{groupLifecyclePolicy-id}
 */
class GroupLifecyclePolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get groupLifecyclePolicies from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return GroupLifecyclePolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): GroupLifecyclePolicy
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
     * Deserialize response to GroupLifecyclePolicy
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
        return new GroupLifecyclePolicy($data);
    }
    /**
     * Update the navigation property groupLifecyclePolicies in groups
     * @param GroupLifecyclePolicy $body Request body
     * @return GroupLifecyclePolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(GroupLifecyclePolicy $body): GroupLifecyclePolicy
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to GroupLifecyclePolicy
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
        return new GroupLifecyclePolicy($data);
    }
    /**
     * Delete navigation property groupLifecyclePolicies for groups
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
     * Navigate to addGroup
     *
     * @return AddGroupRequestBuilder
     */
    public function addGroup(): AddGroupRequestBuilder
    {
        return new AddGroupRequestBuilder($this->client, $this->requestUrl . '/addGroup');
    }
    /**
     * Navigate to removeGroup
     *
     * @return RemoveGroupRequestBuilder
     */
    public function removeGroup(): RemoveGroupRequestBuilder
    {
        return new RemoveGroupRequestBuilder($this->client, $this->requestUrl . '/removeGroup');
    }
}
